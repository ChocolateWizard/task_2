<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Models\ProductionRole;
use App\Models\Movie;

class ProductionInfoSeeder extends Seeder
{


    //per movie
    private $maxNumberOfDirectors = 2;
    private $minNumberOfDirectors = 1;
    private $maxNumberOfWriters = 3;
    private $minNumberOfWriters = 1;
    private $minNumberOfActors = 5;
    private $maxNumberOfActors = 10;
    //per actor
    private $minNumberOfActorsRoles = 1;
    private $maxNumberOfActorsRoles = 2;

    public function run(): void
    {
        $this->command->info('Seeding production table...');
        DB::table('production')->delete();
        $movieIds = Movie::select('id')->orderBy('id')->get();

        $allDirectors = Person::whereRelation('productionRoles', 'name', 'Director')->get();
        $allWriters = Person::whereRelation('productionRoles', 'name', 'Writer')->get();
        $allActors = Person::whereRelation('productionRoles', 'name', 'Actor')->get();
        $errorOccurred = false;

        if (!($this->isEnoughDirectors($allDirectors->count()))) {
            $this->command->error('Not enough directors in expected table!');
            $errorOccurred = true;
        }
        if (!($this->isEnoughWriters($allWriters->count()))) {
            $this->command->error('Not enough writers in expected table!');
            $errorOccurred = true;
        }
        if (!($this->isEnoughActors($allActors->count()))) {
            $this->command->error('Not enough actors in expected table!');
            $errorOccurred = true;
        }
        if (!$errorOccurred) {
            foreach ($movieIds as $movieId) {
                $numOfDirectors = fake()->numberBetween($this->minNumberOfDirectors, $this->maxNumberOfDirectors);
                $numOfWriters = fake()->numberBetween($this->minNumberOfWriters, $this->maxNumberOfWriters);
                $numOfActors = fake()->numberBetween($this->minNumberOfActors, $this->maxNumberOfActors);

                //insert random directors
                $directors = fake()->randomElements($allDirectors, $numOfDirectors);
                foreach ($directors as $director) {
                    DB::table('production')->insert(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $director->id,
                            'production_role_id' => ProductionRole::where('name', 'Director')->first()->id
                        ]
                    );
                }

                //insert random writers
                $writers = fake()->randomElements($allWriters, $numOfWriters);
                foreach ($writers as $writer) {
                    DB::table('production')->insert(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $writer->id,
                            'production_role_id' => ProductionRole::where('name', 'Writer')->first()->id
                        ]
                    );
                }

                //insert random actors
                $actors = fake()->randomElements($allActors, $numOfActors);
                foreach ($actors as $actor) {
                    $id = DB::table('production')->insertGetId(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $actor->id,
                            'production_role_id' => ProductionRole::where('name', 'Actor')->first()->id
                        ]
                    );
                    $numOfActorRoles = fake()->numberBetween($this->minNumberOfActorsRoles, $this->maxNumberOfActorsRoles);
                    for ($i = 0; $i < $numOfActorRoles; $i++) {
                        DB::table('actors_roles')->insert(
                            [
                                'production_id' => $id,
                                'order_num' => ($i + 1),
                                'role' => fake()->name()
                            ]
                        );
                    }
                }
            }
            $this->command->info('Seeding successfull!');
        } else {
            $this->command->error('Seeding unsuccessfull!');
        }
    }

    private function isEnoughDirectors(int $numOfDirectors): bool
    {
        return (($numOfDirectors >= $this->maxNumberOfDirectors));
    }
    private function isEnoughWriters(int $numOfWriters): bool
    {
        return ($numOfWriters >= $this->maxNumberOfWriters);
    }
    private function isEnoughActors(int $numOfActors): bool
    {
        return ($numOfActors >= $this->maxNumberOfActors);
    }
}

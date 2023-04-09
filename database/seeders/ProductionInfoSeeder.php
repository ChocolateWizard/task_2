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
    private int $maxNumberOfDirectors = 2;
    private int $minNumberOfDirectors = 1;
    private int $maxNumberOfWriters = 3;
    private int $minNumberOfWriters = 1;
    private int $minNumberOfActors = 5;
    private int $maxNumberOfActors = 10;
    //per actor
    private int $minNumberOfRolesPerActor = 1;
    private int $maxNumberOfRolesPerActor = 2;

    public function run(): void
    {
        $this->command->info('Seeding production table, and its child table...');
        DB::table('production')->delete();
        $movieIds = Movie::select('id')->orderBy('id')->get();

        $allDirectors = Person::whereRelation('productionRoles', 'name', 'Director')->get();
        $allWriters = Person::whereRelation('productionRoles', 'name', 'Writer')->get();
        $allActors = Person::whereRelation('productionRoles', 'name', 'Actor')->get();

        $errorOccurred = $this->validate($allDirectors->count(), $allWriters->count(), $allActors->count());

        if (!$errorOccurred) {
            foreach ($movieIds as $movieId) {
                $numOfDirectors = fake()->numberBetween($this->minNumberOfDirectors, $this->maxNumberOfDirectors);
                $numOfWriters = fake()->numberBetween($this->minNumberOfWriters, $this->maxNumberOfWriters);
                $numOfActors = fake()->numberBetween($this->minNumberOfActors, $this->maxNumberOfActors);

                //pick random directors
                $directors = fake()->randomElements($allDirectors, $numOfDirectors);
                //pick random directors
                foreach ($directors as $director) {
                    DB::table('production')->insert(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $director->id,
                            'production_role_id' => ProductionRole::where('name', 'Director')->first()->id
                        ]
                    );
                }

                //pick random writers
                $writers = fake()->randomElements($allWriters, $numOfWriters);
                //insert random writers
                foreach ($writers as $writer) {
                    DB::table('production')->insert(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $writer->id,
                            'production_role_id' => ProductionRole::where('name', 'Writer')->first()->id
                        ]
                    );
                }

                //pick random actors
                $actors = fake()->randomElements($allActors, $numOfActors);
                //insert random actors, each with their number of random roles
                foreach ($actors as $actor) {
                    $id = DB::table('production')->insertGetId(
                        [
                            'movie_id' => $movieId->id,
                            'person_id' => $actor->id,
                            'production_role_id' => ProductionRole::where('name', 'Actor')->first()->id
                        ]
                    );
                    //pick number of roles for current actor
                    $numOfActorRoles = $this->getNumberOfRolesPerActor($this->minNumberOfRolesPerActor, $this->maxNumberOfRolesPerActor);
                    //insert random roles for current actor
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

    private function validate(int $numOfDirectors, int $numOfWriters, int $numOfActors): bool
    {
        $error = false;
        if ($this->minNumberOfDirectors > $this->maxNumberOfDirectors) {
            $this->command->error('Min/Max number of directors bounds invalid!');
            $error = true;
        }
        if ($this->minNumberOfWriters > $this->maxNumberOfWriters) {
            $this->command->error('Min/Max number of writers bounds invalid!');
            $error = true;
        }
        if ($this->minNumberOfActors > $this->maxNumberOfActors) {
            $this->command->error('Min/Max number of actors bounds invalid!');
            $error = true;
        }
        if ($this->minNumberOfRolesPerActor > $this->maxNumberOfRolesPerActor) {
            $this->command->error('Min/Max number of roles per actor bounds invalid!');
            $error = true;
        }

        if (!($this->isEnoughDirectors($numOfDirectors))) {
            $this->command->error('Not enough directors in expected table!');
            $error = true;
        }
        if (!($this->isEnoughWriters($numOfWriters))) {
            $this->command->error('Not enough writers in expected table!');
            $error = true;
        }
        if (!($this->isEnoughActors($numOfActors))) {
            $this->command->error('Not enough actors in expected table!');
            $error = true;
        }
        return $error;
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


    //returns random number between passed boundaries
    private function getNumberOfRolesPerActor(int $minNumberOfRolesPerActor, int $maxNumberOfRolesPerActor): int
    {
        //this return random number in given range with equal probability
        // return fake()->numberBetween($minNumberOfRolesPerActor, $maxNumberOfRolesPerActor);

        //this should return random number in given range with higher probability
        //of it being closer to lower end
        return fake()->biasedNumberBetween($minNumberOfRolesPerActor, $maxNumberOfRolesPerActor, $function = function ($x) {
            return 1 / (100 * $x);
        });
    }
}

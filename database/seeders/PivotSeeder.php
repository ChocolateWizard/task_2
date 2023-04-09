<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Person;
use App\Models\ProductionRole;

class PivotSeeder extends Seeder
{

    //users library helper params
    private $maxSizeOfUsersLibrary = 3;
    private bool $skipFirstUser = true;

    //movie genres helper param
    private $maxNumOfGenresPerMovie = 3;

    //person qualification helper param
    private $maxNumORolesPerPerson = 3;


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Seeding pivot tables...');
        $this->usersMoviesTable();
        $this->moviesGenresTable();
        $this->peopleQualificationsTable();
        $this->command->info('Seeding pivot tables finished!');
    }

    private function usersMoviesTable()
    {
        $this->command->info('  '.'Seeding user_movies pivot table...');
        DB::table('user_movies')->delete();
        $userIds = User::select('id')->orderBy('id')->get();
        $movieIds = Movie::select('id');
        for ($i = (int)$this->skipFirstUser; $i < $userIds->count(); $i++) {
            $sizeOfLibrary = fake()->numberBetween($min = 1, $this->maxSizeOfUsersLibrary);
            $library = fake()->randomElements($movieIds->get(), $sizeOfLibrary);
            for ($j = 0; $j < count($library); $j++) {
                DB::table('user_movies')->insert(
                    [
                        'user_id' => $userIds->get($i)->id,
                        'movie_id' => $library[$j]['id']
                    ]
                );
            }
        }
        $this->command->info('  '.'Seeding user_movies table finished.');
    }
    private function moviesGenresTable()
    {
        $this->command->info('  '.'Seeding movie_genres pivot table...');
        DB::table('movie_genre')->delete();
        $movieIds = Movie::select('id')->orderBy('id')->get();
        $genreIds = Genre::select('id');
        for ($i = 0; $i < $movieIds->count(); $i++) {
            $numberOfGenres = fake()->numberBetween($min = 1, $this->maxNumOfGenresPerMovie);
            $genres = fake()->randomElements($genreIds->get(), $numberOfGenres);
            for ($j = 0; $j < count($genres); $j++) {
                DB::table('movie_genre')->insert(
                    [
                        'movie_id' => $movieIds->get($i)->id,
                        'genre_id' => $genres[$j]['id']
                    ]
                );
            }
        }
        $this->command->info('  '.'Seeding movie_genres table finished.');
    }
    private function peopleQualificationsTable()
    {
        $this->command->info('  '.'Seeding people_production_roles pivot table...');
        DB::table('people_production_roles')->delete();
        $peopleIds = Person::select('id')->orderBy('id')->get();
        $roleIds = ProductionRole::select('id');
        for ($i = 0; $i < $peopleIds->count(); $i++) {
            $numberOfRoles = fake()->numberBetween($min = 1, $this->maxNumORolesPerPerson);
            $roles = fake()->randomElements($roleIds->get(), $numberOfRoles);
            for ($j = 0; $j < count($roles); $j++) {
                DB::table('people_production_roles')->insert(
                    [
                        'person_id' => $peopleIds->get($i)->id,
                        'production_role_id' => $roles[$j]['id']
                    ]
                );
            }
        }
        $this->command->info('  '.'Seeding people_production_roles table finished.');
    }
}

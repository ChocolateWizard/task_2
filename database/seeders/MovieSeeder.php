<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->deleteAllRows();
        $movies = $this->defineData();
        $this->insertAllData($movies);
    }
    private function deleteAllRows()
    {
        foreach (Movie::all() as $e) {
            $e->delete();
        }
    }
    private function insertAllData($data)
    {
        foreach ($data as $key => $value) {
            Movie::factory()->create($value);
        }
        Movie::factory(10)->create();
    }
    private function defineData()
    {
        return [
            [
                'title' => 'The Lighthouse',
                'release_date' => '2019-04-18',
                'cover_url' => 'storage/movies/covers/The_Lighthouse.jpg',
                'description' => 'Two lighthouse keepers try to maintain their sanity while living on a remote and mysterious New England island in the 1890s',
                'rating' => 74
            ],
            [
                'title' => 'Eyes Wide Shut',
                'release_date' => '1999-07-16',
                'cover_url' => 'storage/movies/covers/Eyes_Wide_Shut.jpg',
                'description' => 'A Manhattan doctor embarks on a bizarre, night-long odyssey after his wife\'s admission of unfulfilled longing',
                'rating' => 75
            ],
            [
                'title' => 'No Country for Old Men',
                'release_date' => '2007-11-09',
                'cover_url' => 'storage/movies/covers/No_Country_For_Old_Men.jpg',
                'description' => 'Violence and mayhem ensue after a hunter stumbles upon a drug deal gone wrong and more than two million dollars in cash near the Rio Grande',
                'rating' => 82
            ],
            [
                'title' => 'The Shining',
                'release_date' => '1980-06-23',
                'cover_url' => 'storage/movies/covers/The_Shining.jpg',
                'description' => 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future',
                'rating' => 84
            ]
        ];
    }
}

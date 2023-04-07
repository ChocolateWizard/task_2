<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->deleteAllRows();
        $genres = $this->defineData();
        $this->insertAllData($genres);
    }
    private function deleteAllRows()
    {
        foreach (Genre::all() as $e) {
            $e->delete();
        }
    }
    private function insertAllData($data)
    {
        foreach ($data as $key => $value) {
            Genre::create($value);
        }
    }
    private function defineData()
    {
        return [
            ['name' => 'Action'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'Fantasy'],
            ['name' => 'Horror'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Thriller'],
            ['name' => 'Western']
        ];
    }
}

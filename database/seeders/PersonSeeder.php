<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->deleteAllRows();
        $people = $this->defineData();
        $this->insertAllData($people);
    }

    private function deleteAllRows()
    {
        foreach (Person::all() as $e) {
            $e->delete();
        }
    }
    private function insertAllData($data)
    {
        foreach ($data as $key => $value) {
            Person::create($value);
        }
        Person::factory(20)->create();
    }
    private function defineData()
    {
        return [];
    }
}

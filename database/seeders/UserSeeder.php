<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Database\Factories\CountryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->deleteAllRows();
        $users = $this->defineData();
        $this->insertAllData($users);
    }
    private function deleteAllRows()
    {
        foreach (User::all() as $e) {
            $e->delete();
        }
    }
    private function insertAllData($data)
    {
        foreach ($data as $key => $value) {
            User::factory()->create($value);
        }
        User::factory(5)->create();
    }
    private function defineData()
    {
        return [
            [
                'first_name' => 'Marko',
                'last_name' => 'Markovic',
                'username' => 'a',
                'email' => 'marko@gmail.com',
                'password' => Hash::make('a')
            ]
        ];
    }
}

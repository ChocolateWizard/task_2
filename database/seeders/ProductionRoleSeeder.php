<?php

namespace Database\Seeders;

use App\Models\ProductionRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->deleteAllRows();
        $roles = $this->defineData();
        $this->insertAllData($roles);
    }
    private function deleteAllRows()
    {
        foreach (ProductionRole::all() as $e) {
            $e->delete();
        }
    }
    private function insertAllData($data)
    {
        foreach ($data as $key => $value) {
            ProductionRole::create($value);
        }
    }
    private function defineData()
    {
        return [
            ['name' => 'Director'],
            ['name' => 'Writer'],
            ['name' => 'Actor']
        ];
    }
}

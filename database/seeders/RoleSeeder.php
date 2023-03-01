<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        foreach (config('roles') as $name => $id) {
            Role::factory()->create([
                'id' => $id,
                'name' => $name,
            ]);
        }
    }
}

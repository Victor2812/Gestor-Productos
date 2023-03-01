<?php

namespace Database\Seeders;

use App\Models\Personas;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        Personas::factory()->count(40)->state(new Sequence(
            fn ($sequence) => ['role_id' => config('roles.CLIENTE')]
        ))->create();
    }
}

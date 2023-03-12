<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PersonSeeder::class,
            PersistentSeeder::class,
            CategoriaSeeder::class,
            FritosSeeder::class,
            EntrantesSeeder::class,
            PescadosSeeder::class,
            CarnesSeeder::class, 
            PostresSeeder::class, 
            TBizcochoSeeder::class,
            THojaldreSeeder::class,
            TVariadasSeeder::class,
        ]);
    }
}

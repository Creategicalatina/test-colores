<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/seeders/sql/preguntas.sql';
        DB::unprepared(file_get_contents($path));
        //$this->call(CharacteristicSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}

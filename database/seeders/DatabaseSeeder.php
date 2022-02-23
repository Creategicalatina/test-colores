<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(UserTableSeeder::class);

        /*=============================================
         CREAMOS EL ADMINISTRADOR DEL SISTEMA
       =============================================*/
        User::factory()->create([
            'name' => 'Admin Sistema',
            'email' => 'admin@admin.co',
        ])->each(function (User $user){
            $user->roles()->attach('1');
        });
//        factory(User::class, 1)->create([
//
//        ])->each(function (\App\User $u) {
//
//        });
    }
}

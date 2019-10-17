<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@dominio.cl',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        for ($a = 0; $a <= 10; $a++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => false,
            ]);
        }

        for ($b = 0; $b <= 100; $b++) {
            DB::table('responses')->insert([
                'user_id' => rand(1, 10),
                'is_correct' => rand(1, 3),
                'score' => rand(1, 5),
                'suggestions' => Str::random(10),
            ]);
        }
    }
}

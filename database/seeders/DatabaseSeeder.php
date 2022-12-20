<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\categorias;
use App\Models\centros;
use App\Models\User;
use Illuminate\Database\Seeder;
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

        //centros::factory(1)->create();
        //categorias::factory(1)->create();
        User::factory()->create([
            'name' => 'Javier Ortega Ubago',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'), // password
            'remember_token' => Str::random(10),
            'categoria_id' => 1,
            'centro_id' => 1,
            'telefono' => random_int(0,10),
            'antiguedad' => now(),
            'codigo' => '478',
            'is_admin' => true,
        ]);
         //User::factory(10)->create();



    }
}

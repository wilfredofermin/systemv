<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
             DB::table('users')->insert([
            'nombre'     => $faker->firstName,
            'apellidos'  => $faker->LastName,
            'email'      => $faker->unique()->email,
            'tipo'  => 'user',
            'password'   =>\Hash::make('Viva12345')
        ]);
            
        }

        
    }
}

<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        //

        DB::table('users')->insert([
            'nombre'     => 'User',
            'apellidos'  => 'Adminstrador',
            'email'      => 'admin@viva.com.do',
            'tipo'  => 'admin',
            'password'   =>\Hash::make('Viva12345')
        ]);
         DB::table('users')->insert([
            'nombre'       => 'Wilfredo',
            'apellidos'       => 'Fermin R.',
            'email'      => 'wfermin@viva.com.do',
            'tipo'  => 'admin',
            'password'   =>\Hash::make('Viva12345')
        ]);
         DB::table('users')->insert([
            'nombre'       => 'Ricardo ',
            'apellidos'       => 'Medina',
            'email'      => 'rmediana@viva.com.do',
            'tipo'  => 'admin',
            'password'   =>\Hash::make('Viva12345')
        ]);
    }
}

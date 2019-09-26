<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;
use \App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([  'email'=>'email@email.com',
                        'password'=>Hash::make('password')]);

    }
}

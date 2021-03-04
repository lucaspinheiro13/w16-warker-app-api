<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        try{
       User::create([
           'email'=>'warkerMain@w16.com.br',
           'name' => 'MarcoPoc',
           'password' => Hash::make('warkerPass'),
       ]);
        } catch (Exception $e) {
            echo 'usuario registrado ';
        }
    }
}

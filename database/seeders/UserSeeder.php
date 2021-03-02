<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
       User::create([
           'email'=>'warkerMain@w16.com.br',
           'name' => 'MarcoPoc',
           'password' => Hash::make('warkerPass'),
       ]);
    }
}

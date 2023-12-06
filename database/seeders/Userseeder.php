<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
   /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'STEVIE ROSE',
            'email' => 'stevierosenguila2023@gmail.com',
            'roles_id' => 1,
            'password' => Hash::make('Stevie@2023'),
        ]);
    }
}

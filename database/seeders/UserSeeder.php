<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert(
            [
                'first_name' => 'alice',
                'last_name' => 'wonderland',
                'email' => 'alice@abc.com',
                'password' => '123456789',
                'contact' => '123456',
                'address' => '1, rue de longwy, villerupt L-2021'
            ]);
    }
}

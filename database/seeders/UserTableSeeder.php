<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            //4th
        User::create([
            'name' => 'Sopon',
            'email' => 'sopon@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'admin'

        ]);
    }
}

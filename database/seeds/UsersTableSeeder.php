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
        App\User::create([
            'name' => 'admin',
        	'password' => bcrypt('admin'),
        	'email' => 'admin@gmail.com',
        	'admin' => 1,
        ]);

        App\User::create([
            'name' => 'Cate',
            'password' => bcrypt('password'),
            'email' => 'cate@gmail.com',
            
        ]);
    }
}

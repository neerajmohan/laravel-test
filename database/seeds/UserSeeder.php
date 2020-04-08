<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'admin',
            'email' => 'admin@crud.com',
            'password' => Hash::make('password'),
        ],
        [
            'name' => 'user',
            'email' => 'user@crud.com',
            'password' => Hash::make('password'),
        ]
        ]
    );
    }
}

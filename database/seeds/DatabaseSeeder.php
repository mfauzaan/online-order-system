<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'Admin',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}

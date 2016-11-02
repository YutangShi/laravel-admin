<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => "allen",
            'email' => 'allen@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('admins')->insert([
            'name' => "allen",
            'email' => 'allen@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}

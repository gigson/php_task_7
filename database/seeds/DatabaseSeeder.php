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
        DB::table('users')->insert([
            'name' => "root",
            'email' => "root@mailinator.com",
            'password' => Hash::make('password'),
        ]);

        DB::table('phones')->insert([
            'user_id' => 1,
            'number' => "593101010",
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'text' => "My first comment",
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'text' => "My second comment",
        ]);

        DB::table('roles')->insert([
            'name' => "customer",
        ]);

        DB::table('roles')->insert([
            'name' => "admin",
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
        ]);
    }
}

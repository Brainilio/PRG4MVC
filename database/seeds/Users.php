<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '123456',
            'admin' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@admin.com',
            'password' => '123456',
            'admin' => '1'
        ]);
    }
}

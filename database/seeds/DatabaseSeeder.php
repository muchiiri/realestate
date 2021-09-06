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
        //Admins
        DB::table('admins')->insert([
            [
                'id'       => 1,
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'password'      => bcrypt('123456'),
                'avatar'      => 'user.jpg',
                'issuper'    => '1',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);

        //Users
        DB::table('users')->insert([
            [
                'id'       => 2,
                'name'          => 'User',
                'email'         => 'user@user.com',
                'password'      => bcrypt('123456'),
                'avatar'      => 'user.jpg',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);

    }   
}   

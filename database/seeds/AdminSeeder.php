<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
           'name' => 'Admin Satu',
            'username' => 'adminsatu',
            'email' => 'admin1@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('adminsatu'),
         ],
         [
           'name' => 'Admin Dua',
            'username' => 'admindua',
            'email' => 'admin2@gmail.com',
            'role' => 'Admin',
            'password' => bcrypt('admindua'),
         ]
       ]);
    }
}

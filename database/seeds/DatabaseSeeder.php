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
        DB::table('roles')->insert([
        	'id' => 1,
            'rulename' => 'admin',
        ]);

        DB::table('roles')->insert([
        	'id' => 2,
        	'rulename' => 'user',
        ]);
        
    	DB::table('users')->insert([
        	'roles_id' => 1,
            'username' => 'Ridlwan Yunus',
            'email' => 'hiddenjustice309@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}

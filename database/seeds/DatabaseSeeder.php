<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //trucating all the taables

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $tables=array(
            'hotels',
            'users',
            'password_resets',
            
            'rooms',
            'messages',
            'comments',
            'hotel_users'

            );

        foreach ($tables as $table)

        {
            DB::table($table)->truncate();
        }
       
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->truncate(); //elimina la bd cada vez que realizo el seed

        

   


        factory(App\User::class,10)->create();

        factory(App\User::class)->create([
            'name'  =>'luiscarlosmarca',
            'email' =>'root@app.com.co',
            'role'  =>'admin',
            'password'=>bcrypt('secret')

            ]);


        factory(App\hotel::class,10)->create();
        
        factory(App\room::class,10)->create();
        
        factory(App\message::class,10)->create();
        
        factory(App\vote::class,10)->create();

        factory(App\comment::class,10)->create();

    }
}

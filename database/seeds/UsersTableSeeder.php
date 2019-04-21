<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->create());
        }); 
    //création d'un utilisateur pour lui donner le role admin
        DB::table('users')->insert([
                'name' => "jugurtha",
                'email' => "jugurtha@gmail.com",
                'password' => bcrypt('djigou89'),
            ]);

    }
}

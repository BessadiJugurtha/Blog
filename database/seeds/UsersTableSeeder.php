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
        // DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => bcrypt('secret'),
        //     ]);

        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->create());
        }); 
    
    }
}

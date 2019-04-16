<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //ce seeder a été creé pour le test 
            // DB::table('posts')->insert([
            //     'post_author'=>Str::random(8),
            //     'post_date'=>'2019-02-27',
            //     'post_content'=>Str::random(20),
            //     'post_title'=>Str::random(10),
            //     'post_name'=>Str::random(10),
            //     'post_type'=>Str::random(10),
            //     ]);      

       
    }
}

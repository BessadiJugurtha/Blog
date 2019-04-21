<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
                    'nom' => 'User',
                    'description' => 'utilisateur,droit limités',
                ]);

        DB::table('roles')->insert([
            'nom' => 'Admin',
            'description' => 'administrateur, il a tous les droit',
        ]);
//attribution du role administrateur au user id = 11
        DB::table('user_role')->insert([
            'user_id' => 11,
            'role_id' => 2,
        ]);
    }

}

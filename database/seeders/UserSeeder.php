<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = DB::table("roles")
        ->orderBy("id")->get();
        foreach($roles as $role){
            DB::table('users')->insert([
                'id' =>  $role->id,
                'name' => $role->name,
                'email' => $role->name.'@softui.com',
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => $role->id
            ]);

        }
    }
}

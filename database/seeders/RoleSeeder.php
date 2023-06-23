<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'developer',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'administrador',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'gerente',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'corretor',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\db;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'nishi',
            'email' => 'n@gmail',
            'password' => 'sakine',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'umeyama',
            'email' => 'u@gmail',
            'password' => 'mariko',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'kagami',
            'email' => 'k@gmail',
            'password' => 'riho',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('users')->insert($param);
    }
}

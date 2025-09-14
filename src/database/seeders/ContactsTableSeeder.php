<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'category_id' => '1',
            'first_name' => 'ishi',
            'last_name' => 'g',
            'gender' => '1',
            'email' => 'g@gmail',
            'tel' => '90909090909',
            'address' => 'kuki',
            'building' => 'kuki',
            'detail' => 'saitama',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'category_id' => '2',
            'first_name' => 'ann',
            'last_name' => 'jon',
            'gender' => '2',
            'email' => 's@gmail',
            'tel' => '909090909',
            'address' => 'korea',
            'building' => 'tokyo',
            'detail' => 'marunouti',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'category_id' => '3',
            'first_name' => 'nis',
            'last_name' => 'sae',
            'gender' => '2',
            'email' => 'n@gmail',
            'tel' => '000',
            'address' => 'Japan',
            'building' => 'osaka',
            'detail' => 'osaka',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        DB::table('contacts')->insert($param);
    }
}

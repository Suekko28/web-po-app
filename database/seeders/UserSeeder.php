<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $created_at = date("Y-m-d H:i:s", strtotime(Date::now()));

        DB::table('users')->insert([
            [
            'name'=>'root',
            'email'=>'root@root.com',
            'password'=>Hash::make('root123'),
            'role'=>'1',
            ],
            [
            'name'=>'james',
            'email'=>'james@gmail.com',
            'password'=>Hash::make('123'),
            'role'=>'2',
            ],
        ]);
    }
}

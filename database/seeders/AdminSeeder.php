<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Asif islam',
            'email'=>'asif@gmail.com',
            'mobile'=>'017358865',
            'password'=>Hash::make('123456'),
            'status'=>1,
            'role'=>'vbr'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertests')->insert([
            'email' => 'mach_j',
            'role' =>'student',
            'password' => Hash::make('test'),
        ]);
        DB::table('usertests')->insert([
            'email' => 'sasees_a',
            'role' => 'student',
            'password' => Hash::make('test'),
        ]);
        DB::table('usertests')->insert([
            'email' => 'vitte_c',
            'role' => 'student',
            'password' => Hash::make('test'),
        ]);
        DB::table('usertests')->insert([
            'email' => 'guerre_e',
            'role' => 'student',
            'password' => Hash::make('test'),
        ]);
        DB::table('usertests')->insert([
            'email' => 'cristi_d',
            'role' => 'adm',
            'password' => Hash::make('test'),
        ]);
        DB::table('usertests')->insert([
            'email' => 'rinaz_s',
            'role' => 'supadm',
            'password' => Hash::make('test'),
        ]);
    }
}


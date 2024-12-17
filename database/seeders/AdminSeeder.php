<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'bss',
            'email' => 'bss@gmail.com',
            'usertype' => 'admin',
            'password' => Hash::make('bss12345'),
            'no_hp' => '089746842622',
            'alamat' => 'indramayu',
        ]);
    }
}

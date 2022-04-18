<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
   /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'tes@gmail.com',
            'password' =>'12345',
            'kode_user' =>'75757',
            'alamat' => 'Jl. Kebon Jeruk',
            'no_telp' => '081212121212',
            'no_izin' => '123456789',
        ]);
    }
}




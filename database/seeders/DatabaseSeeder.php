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
        // Akun 1
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'tes@gmail.com',
            'password' =>Hash::make('12345'),
            'kode_user' =>'75757',
            'alamat' => 'Jl. Kebon Jeruk',
            'no_telp' => '081212121212',
            'no_izin' => '123456789',
        ]);
        // Akun 2
        DB::table('users')->insert([
            'name' => 'tes',
            'email' => 'tus@gmail.com',
            'password' => Hash::make('12345'),
            'kode_user' =>'757',
            'alamat' => 'Jl. Kebon Jeruk',
            'no_telp' => '081212121212',
            'no_izin' => '123456789',
        ]);
    }
}




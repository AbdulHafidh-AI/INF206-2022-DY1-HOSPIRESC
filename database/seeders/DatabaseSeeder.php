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


        


        // Akun kedua
        DB::table('users')->insert([
            'name' => 'RS Zainal Abidin',
            'email' => 'zainal@gmail.com',
            'password' =>Hash::make('1702fg'),
            'kode_user' =>'020617',
            'alamat' => 'Jl. Baiturrahman',
            'no_telp' => '082172330140',
            'no_izin' => '330140',
        ]);

        // Akun ketiga
        DB::table('users')->insert([
            'name' => 'RS Cempaka',
            'email' => 'cempaka@gmail.com',
            'password' =>Hash::make('684hfsj'),
            'kode_user' =>'170206',
            'alamat' => 'Jl. Darussalam',
            'no_telp' => '08227344023',
            'no_izin' => '734402',
        ]);

        // Akun keempat
        DB::table('users')->insert([
            'name' => 'RS Pertamedika',
            'email' => 'pertamedika@gmail.com',
            'password' =>Hash::make('98hfsj2'),
            'kode_user' =>'749383',
            'alamat' => 'Jl. Batoh',
            'no_telp' => '082363437280',
            'no_izin' => '7583799',
        ]);

        // Akun kelima
        DB::table('users')->insert([
            'name' => 'RS Sejahtera',
            'email' => 'sejahtera@gmail.com',
            'password' =>Hash::make('23fafa'),
            'kode_user' =>'564828',
            'alamat' => 'Jl. Ismail',
            'no_telp' => '082364585780',
            'no_izin' => '12634789',
        ]);

        // Akun keenam
        DB::table('users')->insert([
            'name' => 'RS Cut Nyak Dhien',
            'email' => 'cutnd@gmail.com',
            'password' =>Hash::make('2322hdsa'),
            'kode_user' =>'567235',
            'alamat' => 'Jl. Imam Bonjol',
            'no_telp' => '086437583470',
            'no_izin' => '347264',
        ]);


        // Akun ketujuh
        DB::table('users')->insert([
            'name' => 'RS Dr. Reksodiwiryo',
            'email' => 'reksodiwiryo@gmail.com',
            'password' =>Hash::make('6347afa'),
            'kode_user' =>'908349',
            'alamat' => 'Jl. Haji Salam',
            'no_telp' => '086473657435',
            'no_izin' => '357832',
        ]);


        // Akun kedelapan
        DB::table('users')->insert([
            'name' => 'RS Kesdam',
            'email' => 'kesdam@gmail.com',
            'password' =>Hash::make('745feb'),
            'kode_user' =>'093275',
            'alamat' => 'Jl. Angkasa',
            'no_telp' => '0824528593',
            'no_izin' => '099374',
        ]);


        // Akun kesembilan
        DB::table('users')->insert([
            'name' => 'RS Prince Nayef',
            'email' => 'nayef@gmail.com',
            'password' =>Hash::make('253opp'),
            'kode_user' =>'97536',
            'alamat' => 'nayef@gmail.com',
            'no_telp' => '088397593746',
            'no_izin' => '5374968',
        ]);


        // Akun kesepuluh
        DB::table('users')->insert([
            'name' => 'RS Dahlan',
            'email' => 'dahlan@gmail.com',
            'password' =>Hash::make('6547oke'),
            'kode_user' =>'2349405',
            'alamat' => 'Jl. Dahlan',
            'no_telp' => '08342537583',
            'no_izin' => '94896745',
        ]);

        // Akun 11
        DB::table('users')->insert([
            'name' => 'RS Teungku Fakinah',
            'email' => 'fakinah@gmail.com',
            'password' =>Hash::make('643yaya'),
            'kode_user' =>'23902',
            'alamat' => 'Jl. Banda',
            'no_telp' => '0629842949',
            'no_izin' => '253274',
        ]);

        // Akun 12
        DB::table('users')->insert([
            'name' => 'RS Diyah',
            'email' => 'diyah@gmail.com',
            'password' =>Hash::make('123eaa'),
            'kode_user' =>'589533',
            'alamat' => 'Jl. Anggur',
            'no_telp' => '0865484583',
            'no_izin' => '90289754',
        ]);

        // Akun 13
        DB::table('users')->insert([
            'name' => 'RS Kuini',
            'email' => 'kuini@gmail.com',
            'password' =>Hash::make('90kuku'),
            'kode_user' =>'347353',
            'alamat' => 'Jl. Kuini',
            'no_telp' => '08998497694',
            'no_izin' => '3228594',
        ]);

        // Akun 14
        DB::table('users')->insert([
            'name' => 'RS Malahayati',
            'email' => 'hayati@gmail.com',
            'password' =>Hash::make('75847jj'),
            'kode_user' =>'5352735',
            'alamat' => 'Jl. Ulee Kareng',
            'no_telp' => '078547583',
            'no_izin' => '236574',
        ]); 

        // Akun 15
        DB::table('users')->insert([
            'name' => 'RS Meutia',
            'email' => 'meutia@gmail.com',
            'password' =>Hash::make('6547oke'),
            'kode_user' =>'537683',
            'alamat' => 'Jl. Cut Meutia',
            'no_telp' => '08342537583',
            'no_izin' => '94896745',
        ]); 

        // Akun 16
        DB::table('users')->insert([
            'name' => 'RS Destramedika',
            'email' => 'Destramedika@gmail.com',
            'password' =>Hash::make('5463veve'),
            'kode_user' =>'5830894',
            'alamat' => 'Jl. Lamprit',
            'no_telp' => '0894937594',
            'no_izin' => '343754',
        ]); 

        // Akun 17
        DB::table('users')->insert([
            'name' => 'RS Meuraxa',
            'email' => 'meuraxa@gmail.com',
            'password' =>Hash::make('687654gg'),
            'kode_user' =>'332747',
            'alamat' => 'Jl. Sawah',
            'no_telp' => '08248275844',
            'no_izin' => '9083924',
        ]); 

        // Akun 18
        DB::table('users')->insert([
            'name' => 'RS Columbia',
            'email' => 'mbia@gmail.com',
            'password' =>Hash::make('354ggee'),
            'kode_user' =>'0009435',
            'alamat' => 'Jl. Lingke',
            'no_telp' => '08243654767',
            'no_izin' => '89893',
        ]); 

        // Akun 19
        DB::table('users')->insert([
            'name' => 'RS Bhayangkara',
            'email' => 'kara@gmail.com',
            'password' =>Hash::make('3245kk'),
            'kode_user' =>'9657496',
            'alamat' => 'Jl. Merpati',
            'no_telp' => '0874867439',
            'no_izin' => '223455',
        ]); 

        // Akun 20
        DB::table('users')->insert([
            'name' => 'RS Nuraga',
            'email' => 'nuraga@gmail.com',
            'password' =>Hash::make('093563'),
            'kode_user' =>'089475',
            'alamat' => 'Jl. Teuku Umar',
            'no_telp' => '0864735633234',
            'no_izin' => '11111355',
        ]); 

        // Akun 21
        DB::table('users')->insert([
            'name' => 'tes',
            'email' => 'tus@gmail.com',
            'password' => Hash::make('12345'),
            'kode_user' =>'757',
            'alamat' => 'Jl. Kebon Jeruk',
            'no_telp' => '081212121212',
            'no_izin' => '123456789',
        ]);

        // Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '1',
            'title' => 'Pertolongan luka ringan',
            'description' => 'Pertolongan luka ringan',
            'item_name' => 'betadin',
        ]);

          // Memasukkan daftar pertolongan
          DB::table('categories')->insert([
            'user_id' => '2',
            'title' => 'Pertolongan luka bakar',
            'description' => 'Pertolongan luka bakar',
            'item_name' => 'antibiotik',
        ]);

        // Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '3',
            'title' => 'Pertolongan demam berdarah',
            'description' => 'Pertolongan demam berdarah',
            'item_name' => 'kapsul',
        ]);



// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '4',
            'title' => 'Pertolongan tipes',
            'description' => 'Pertolongan tipes tinggi',
            'item_name' => 'Cairan Infus',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '5',
            'title' => 'Pertolongan penyakit jantung',
            'description' => 'Pertolongan untuk penyakit jantung ',
            'item_name' => 'Defribilator Shock',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '6',
            'title' => 'Pertolongan kecelakaan',
            'description' => 'Pertolongan saat kecelakaan motor',
            'item_name' => 'Emergency set',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '7',
            'title' => 'Pertolongan infeksi saluran kemih',
            'description' => 'Pertolongan terinfeksi penyakit saluran kemih',
            'item_name' => 'Foley Cathete',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '8',
            'title' => 'Pertolongan kekurangan zat makanan',
            'description' => 'Pertolongan saat pasien mengalami kekurangan zat makananan',
            'item_name' => 'Infus set',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '9',
            'title' => 'Pertolongan terjadi luka berdarah',
            'description' => 'Pertolongan terjadi luka berdarah',
            'item_name' => 'Kasa',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '10',
            'title' => 'Pertolongan terbukti negatif atau positif',
            'description' => 'Pertolongan pernyataan negatif atau positif pasien terhadap suatu virus',
            'item_name' => 'Mikropipet',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '11',
            'title' => 'Pertolongan pernapasan',
            'description' => 'Pertolongan terhap sistem pernapasan',
            'item_name' => 'Nebulizer',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '12',
            'title' => 'Pertolongan luka terbuka',
            'description' => 'Pertolongan saat pasien mengalami luka terbuka',
            'item_name' => 'Plester',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '13',
            'title' => 'Pertolongan kekurangan oksigen',
            'description' => 'Pertolongan disebabkan oleh kekurangan oksigen',
            'item_name' => 'Pulse Oximeter',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '14',
            'title' => 'Pertolongan pertama kecelakaan mobil',
            'description' => 'Pertolongan pertama saat terjadi kecelakaan mobil pada pasien',
            'item_name' => 'Spuit',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '15',
            'title' => 'Pertolongan pasien asma',
            'description' => 'Pertolongan terjadi pada pasien asma',
            'item_name' => 'Tabung Oksigen',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '16',
            'title' => 'Pertolongan tekanan darah',
            'description' => 'Pertolongan terjadi tekanan darah',
            'item_name' => 'Tensimeter',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '17',
            'title' => 'Pertolongan demam tinggi',
            'description' => 'Pertolongan terjadi demam tinggi',
            'item_name' => 'Termometer',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '18',
            'title' => 'Pertolongan luka terbuka',
            'description' => 'Pertolongan pasien terjadi luka terbuka',
            'item_name' => 'Kapas Luka',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '19',
            'title' => 'Pertolongan untuk operasi',
            'description' => 'Pertolongan saat operasi',
            'item_name' => 'Masker Medis',
        ]);


// Memasukkan daftar pertolongan
        DB::table('categories')->insert([
            'user_id' => '20',
            'title' => 'Pertolongan kesulitan berjalan',
            'description' => 'Pertolongan untuk pasien yang mengalami kesulitan berjalan',
            'item_name' => 'Kursi Roda',
        ]);


  
        // Memasukkan daftar alat medis
        DB::table('table_alat_medis')->insert([
            'nama_alat_medis' => 'Sarung Tangan',
        ]);

         // Memasukkan daftar alat medis
         DB::table('table_alat_medis')->insert([
            'nama_alat_medis' => 'antibiotik',
        ]);

         // Memasukkan daftar alat medis
         DB::table('table_alat_medis')->insert([
            'nama_alat_medis' => 'betadin',
        ]);

         // Memasukkan daftar alat medis
         DB::table('table_alat_medis')->insert([
            'nama_alat_medis' => 'kapsul',
        ]);

    }
}




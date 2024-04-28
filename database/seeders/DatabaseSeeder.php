<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Julio Syah Putra',
            'jurusan' => 'Teknik Informatika',
            'nim' => 'a',
            'password' =>  Hash::make('a'),
            'level' => 'mahasiswa',
            'dosenPA' => 'OSVARI ARSALAN, S.KOM., M.T.',
            'nipDPA' => '198806282018031001',
            'tempatLahir'=>'Palembang',
            'tanggalLahir'=> '21 Juli 2004',
            'nik'=> '082184196510',
            'namaAyah'=> 'Piter Fakhrurrozi',
            'namaIbu'=> 'Karsimah',
            'noHP' => '082184196510',
            'email' => 'juliosp2107@gmail.com',
            'angkatan'=> '2029'
        ]);

        User::factory()->create([
            'name' => 'Ahmad Bintara',
            'jurusan' => 'Teknik Informatika',
            'nim' => '09021282227041',
            'password' =>  Hash::make('password'),
            'level' => 'mahasiswa',
            'dosenPA' => 'YUNITA, M.CS.',
            'nipDPA' => '198306062015042002',
            'tempatLahir'=>'Palembang',
            'tanggalLahir'=> '99 Agustus 2004',
            'nik'=> '999999',
            'namaAyah'=> 'Philifs Bryan Sipahutar',
            'namaIbu'=> 'Dian Maheru',
            'noHP' => '081212121212',
            'email' => 'abin2107@gmail.com',
            'angkatan'=> '2222'
        ]);

        User::factory()->create([
            'name' => 'Denni',
            'jurusan' => 'Teknik Informatika',
            'nim' => '999',
            'password' =>  Hash::make('password'),
            'level' => 'admin',
            'dosenPA' => '',
            'nipDPA' => '',
            'tempatLahir'=>'',
            'tanggalLahir'=> '',
            'nik'=> '',
            'namaAyah'=> '',
            'namaIbu'=> '',
            'noHP' => '',
            'email' => '',
            'angkatan'=> ''
        ]);
    }
}

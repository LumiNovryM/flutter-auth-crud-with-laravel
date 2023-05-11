<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        # Run Seeder Bahkan Jika Table Sudah Terisi Data
        Schema::disableForeignKeyConstraints();
        Karyawan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama_lengkap' => 'Thoriq Nabil Mumtaz', 'jabatan' => 'Mobile Developer', 'email' => 'thoriqnabil@gmail.com', 'nomor_telepon' => '081232324545', 'gaji' => '5.000.000' ],
            ['nama_lengkap' => 'Lumi Novry M', 'jabatan' => 'Back-End Developer', 'email' => 'thoriqnabil@gmail.com', 'nomor_telepon' => '081232324545', 'gaji' => '3.000.000' ],
            ['nama_lengkap' => 'Muhammad Nadim', 'jabatan' => 'Full-Stack Developer', 'email' => 'thoriqnabil@gmail.com', 'nomor_telepon' => '081232324545', 'gaji' => '7.000.000' ],
            ['nama_lengkap' => 'Faiz Fadillah', 'jabatan' => 'Front-End Developer', 'email' => 'thoriqnabil@gmail.com', 'nomor_telepon' => '081232324545', 'gaji' => '12.000.000' ],
            ['nama_lengkap' => 'Saady Muflih', 'jabatan' => 'Laptop Developer', 'email' => 'thoriqnabil@gmail.com', 'nomor_telepon' => '081232324545', 'gaji' => '20.000.000' ],
        ];

        foreach ($data as $key) {
            Karyawan::insert([
                'nama_lengkap' => $key['nama_lengkap'],
                'jabatan' => $key['jabatan'],
                'email' => $key['email'],
                'nomor_telepon' => $key['nomor_telepon'],
                'gaji' => $key['gaji'],
            ]);
        }
    }
}

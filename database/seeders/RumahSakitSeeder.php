<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('rumah_sakit')->insert([
            [
                'nama' => 'RS Harapan Sehat',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'email' => 'harapan@rs.com',
                'telepon' => '02112345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'RS Kasih Ibu',
                'alamat' => 'Jl. Kenangan No. 88, Bandung',
                'email' => 'kasihibu@rs.com',
                'telepon' => '02298765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'RS Sentosa',
                'alamat' => 'Jl. Damai No. 10, Surabaya',
                'email' => 'sentosa@rs.com',
                'telepon' => '03156789012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

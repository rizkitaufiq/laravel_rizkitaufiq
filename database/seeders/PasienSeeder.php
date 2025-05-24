<?php

namespace Database\Seeders;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rs = RumahSakit::first() ?? RumahSakit::factory()->create();

        Pasien::create([
            'nama' => 'Budi',
            'alamat' => 'Jl. Merdeka',
            'no_telpon' => '081234567890',
            'rumah_sakit_id' => $rs->id
        ]);
    }
}

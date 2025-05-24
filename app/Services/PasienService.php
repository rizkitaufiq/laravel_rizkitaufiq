<?php

namespace App\Services;

use App\Models\Pasien;

class PasienService
{
    public function store(array $data): Pasien
    {
        return Pasien::create($data);
    }

    public function update(Pasien $pasien, array $data)
    {
        return $pasien->update($data);
    }

    public function destroy(Pasien $pasien): bool
    {
        return $pasien->delete();
    }
}

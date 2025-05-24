<?php

namespace App\Services;

use App\Models\RumahSakit;


class RumahSakitService
{
    public function getAll()
    {
        return RumahSakit::all();
    }

    public function store(array $data)
    {
        return RumahSakit::create($data);
    }

    public function update(RumahSakit $rs, array $data)
    {
        return $rs->update($data);
    }

    public function delete(RumahSakit $rs)
    {
        return $rs->delete();
    }
}

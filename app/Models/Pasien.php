<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['nama', 'alamat', 'no_telpon', 'rumah_sakit_id'];

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}

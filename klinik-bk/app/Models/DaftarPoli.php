<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarPoli extends Model
{
    use HasFactory;

    protected $table ='daftar_poli';
    protected $fillable = [
        'id_pasien',
        'id_jadwal',
        'keluhan',
        'no_antrian',
        'status'
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal','id');
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien','id');
    }
}


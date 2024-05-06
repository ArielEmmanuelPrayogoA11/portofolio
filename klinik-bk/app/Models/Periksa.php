<?php

namespace App\Models;

use App\Models\DaftarPoli;
use App\Models\DetailPeriksa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periksa extends Model
{
    use HasFactory;

    protected $table ='periksa';
    protected $fillable = [
        'id_daftar_poli',
        'tgl_periksa',
        'catatan',
        'biaya_periksa'
    ];

    public function daftarpoli(){
        return $this->belongsTo(DaftarPoli::class,'id_daftar_poli','id');
      
    }

    public function detailsPeriksa()
    {
        return $this->hasMany(DetailPeriksa::class, 'id_periksa', 'id');
    }
}



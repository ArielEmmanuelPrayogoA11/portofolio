<?php

namespace App\Models;

use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPeriksa extends Model
{
    use HasFactory;

    protected $table ='detail_periksa';
    protected $fillable = [
        'id_periksa',
        'id_obat'
    ];

    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa','id');
    }
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat','id');
    }
    
}

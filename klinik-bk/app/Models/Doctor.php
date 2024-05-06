<?php

namespace App\Models;

use App\Models\Poli;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $table ='dokter';
    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'no_hp',
        'id_poli'
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }


}


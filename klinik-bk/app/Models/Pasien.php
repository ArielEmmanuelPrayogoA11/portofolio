<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;

    protected $table ='pasien';
    protected $fillable = [
        'user_id',
        'nama',
        'no_ktp',
        'no_hp',
        'no_rm'
    ];

    public function userss(){
        return $this->belongsTo(User::class,'user_id','id');
      
    }
}

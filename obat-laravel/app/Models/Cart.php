<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'product_id',
        'qty'
    ];
    public function posts(){
        return $this->belongsTo(Post::class,'product_id','id');
        //                                 foreignkey    primarykey   >> dipanggil di Frontend home Posted on posted by
    }
}

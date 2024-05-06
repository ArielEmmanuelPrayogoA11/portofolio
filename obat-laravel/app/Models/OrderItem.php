<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    protected $table= 'order_items';
    protected $fillable= [
        'order_id',
        'product_id',
        'harga',
        'qty',
        
    ];

    public function products()
    {
        return $this->belongsTo(Post::class, 'product_id', 'id');
    }
}

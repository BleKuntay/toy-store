<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'toy_id', 'quantity'];

    public function toy()
    {
        return $this->belongsTo(Toy::class, 'toy_id', 'toy_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}

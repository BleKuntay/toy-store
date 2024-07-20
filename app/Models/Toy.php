<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Toy extends Model
{
    use HasFactory;

    protected $primaryKey = 'toy_id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    protected $fillable = [
        'name', 'image', 'price', 'description', 'stock', 'category_id'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}

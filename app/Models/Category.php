<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $primaryKey = 'category_id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    public function toy(): HasOne {
        return $this->hasOne(Toy::class, 'category_id', 'category_id');
    }
}

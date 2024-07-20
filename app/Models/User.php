<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'role', 'money',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class, 'user_id', 'user_id');
    }

    public function invoiceHeaders()
    {
        return $this->hasMany(InvoiceHeader::class, 'user_id', 'user_id');
    }
}

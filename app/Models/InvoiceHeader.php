<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceHeader extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_header_id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    protected $fillable = ['user_id', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_header_id', 'invoice_header_id');
    }
}

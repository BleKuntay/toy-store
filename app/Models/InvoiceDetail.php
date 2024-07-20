<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_detail_id';
    protected $keyType = 'uuid';
    public $incrementing = false;

    protected $fillable = ['invoice_header_id', 'toy_id', 'quantity', 'sub_total'];

    public function invoiceHeader()
    {
        return $this->belongsTo(InvoiceHeader::class, 'invoice_header_id', 'invoice_header_id');
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class, 'toy_id', 'toy_id');
    }
}

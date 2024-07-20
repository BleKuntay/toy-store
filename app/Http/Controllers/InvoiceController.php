<?php

namespace App\Http\Controllers;

use App\Models\InvoiceHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Auth::user()->invoiceHeaders;
        return view('invoice.index', compact('invoices'));
    }

    public function show(InvoiceHeader $invoiceHeader)
    {
        return view('invoice.show', compact('invoiceHeader'));
    }
}

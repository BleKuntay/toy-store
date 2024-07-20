@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">Your Invoices</h1>
        <div class="w-full pt-5">
            @foreach($invoices as $invoice)
                <div class="w-[80%] p-4 border-black border-2 rounded-2xl flex flex-row items-center justify-between mb-4">
                    <div>
                        <h2>Invoice #{{ $invoice->invoice_header_id }}</h2>
                        <h3>Total Price: ${{ $invoice->total_price }}</h3>
                        <h3>Date: {{ $invoice->created_at->format('d M Y') }}</h3>
                    </div>
                    <a href="{{ route('invoices.show', $invoice) }}" class="border-black border-2 px-3 py-1 rounded bg-green-500 text-white">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

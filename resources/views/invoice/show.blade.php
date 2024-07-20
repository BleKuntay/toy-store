@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">Invoice #{{ $invoiceHeader->invoice_header_id }}</h1>
        <div class="w-[80%] p-4 border-black border-2 rounded-2xl mt-4">
            <h2>Total Price: ${{ $invoiceHeader->total_price }}</h2>
            <h3>Date: {{ $invoiceHeader->created_at->format('d M Y') }}</h3>
            <h3>User: {{ $invoiceHeader->user->firstName }} {{ $invoiceHeader->user->lastName }}</h3>
            <div class="mt-4">
                <h4 class="text-2xl">Details</h4>
                @foreach($invoiceHeader->invoiceDetails as $detail)
                    <div class="mt-2 p-2 border-b border-gray-300">
                        <h5>Toy: {{ $detail->toy->name }}</h5>
                        <p>Quantity: {{ $detail->quantity }}</p>
                        <p>Subtotal: ${{ $detail->sub_total }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

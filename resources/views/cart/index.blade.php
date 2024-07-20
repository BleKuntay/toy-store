@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="flex items-center text-3xl font-bold text-secondary">
            Your Cart
        </h1>
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div id='items' class="w-full pt-5 flex flex-col items-center">
            @foreach($cart->items as $item)
                <div class="w-[80%] p-4 border-black border-2 rounded-2xl flex flex-row items-center justify-between mb-4">
                    <div class="w-1/4">
                        <img class="object-cover w-full h-full" src="{{ asset('images/toys/' . $item->toy->image) }}" alt="{{ $item->toy->name }}">
                    </div>
                    <div class="w-1/2 flex flex-col items-start">
                        <h2>{{ $item->toy->name }}</h2>
                        <h3>Price: {{ $item->toy->price }}</h3>
                        <h3>Quantity: {{ $item->quantity }}</h3>
                        <form action="{{ route('cart.update', $item) }}" method="post" class="flex items-center mt-2">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-12 text-center border-2 border-black">
                            <button type="submit" class="ml-2 border-2 border-black px-2 py-1 rounded bg-green-500 text-white">Update</button>
                        </form>
                    </div>
                    <form action="{{ route('cart.remove', $item) }}" method="post" class="w-1/4 flex justify-end">
                        @csrf
                        <button type="submit" class="border-2 border-black px-2 py-1 rounded bg-red-500 text-white">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection

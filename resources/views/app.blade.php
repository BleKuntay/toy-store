@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen p-5 flex flex-col items-center">
        <h1 class="flex items-center text-3xl font-bold text-secondary">
            Our Products
        </h1>
        @include('partials.filter')
        <div id='items' class="w-full pt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($toys as $toy)
                <div class="w-full h-[400px] p-4 border-black border-2 rounded-2xl flex flex-col items-center justify-between bg-white">
                    <div class="w-full h-56 border-black border-2">
                        <img class="object-cover w-full h-full" src="{{ asset('images/toys/' . $toy->image) }}" alt="{{ $toy->name }}">
                    </div>
                    <h2>{{ $toy->name }}</h2>
                    <h3>$ {{ $toy->price }}</h3>
                    <div class="h-auto w-full flex flex-row gap-2">
                        <form action="{{ route('cart.add', $toy) }}" method="post" class="flex flex-col items-center w-full">
                            @csrf
                            <input type="number" name="quantity" value="1" min="1" class="w-full text-center border-2 border-black mb-2">
                            <button type="submit" class="w-full border-black border-2 p-3 rounded-2xl hover:transition hover:bg-btn2">
                                Add to Cart
                            </button>
                        </form>
                        <a href="{{ route('toys.show', ['toy' => $toy->toy_id]) }}" class="h-full border-black border-2 p-3 rounded-2xl hover:transition hover:bg-btn2">
                            See Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

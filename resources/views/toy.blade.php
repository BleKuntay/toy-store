@extends('layout.index')

@section('container')
    <button class='bg-btn text-white p-4 m-5 rounded-2xl w-28 font-semibold text-xl'>
        <a href="{{ route('dashboard') }}" class="mt-">BACK</a>
    </button>
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">{{ $toy->name }}</h1>
        <div class="w-full pt-5 flex flex-col items-center">
            <div class="w-[50%] h-[400px] border-black border-2 flex items-center justify-center">
                <img src="{{ asset('images/toys/' . $toy->image) }}" alt="{{ $toy->name }}" class="w-full h-full object-cover">
            </div>
            <div class="w-[50%] mt-5">
                <p class="">Stock: {{ $toy->stock }}</p>
                <div class="flex flex-row items-center gap-2">
                    <h2 class="text-lg font-bold">Category: </h2>
                    <p>{{ $toy->category->name }}</p>
                </div>
                <p>{{ $toy->description }}</p>
            </div>
            <div class="w-[50%] mt-5 flex flex-row items-center justify-center gap-5">
                <button class='w-16 h-16 p-3 rounded-xl border-2 border-black hover:transition hover:bg-btn hover:fill-white'>
                    <img src="{{ asset('images/cart-plus.svg') }}" alt="">
                </button>
                <button class='w-full h-16 border-2 border-black text-xl rounded-xl hover:transition hover:bg-btn hover:text-white'>
                    Buy Now
                </button>
            </div>
        </div>
    </div>
@endsection

@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
    <a href="/admin" class="w-fit px-5 py-3 me-auto ms-5 rounded-lg bg-btn text-white">BACK</a>
        <h1 class="text-3xl font-bold text-secondary">Manage Toys</h1>
        <a href="{{ route('admin.toys.create') }}" class="w-[50%] mt-5 border-2 border-black rounded-xl p-5 text-center bg-blue-500 text-white mb-5">Add New Toy</a>
        <div class="w-full pt-5 flex flex-col items-center">
            @foreach($toys as $toy)
                <div class="w-[80%] p-4 border-black border-2 rounded-2xl flex flex-row items-center justify-between mb-4">
                    <div>
                        <h2>{{ $toy->name }}</h2>
                        <h3>Category: {{ $toy->category->name }}</h3>
                        <h3>Price: ${{ $toy->price }}</h3>
                        <h3>Stock: {{ $toy->stock }}</h3>
                    </div>
                    <div class="flex flex-row gap-2">
                        <a href="{{ route('admin.toys.edit', $toy) }}" class="border-black border-2 px-3 py-1 rounded bg-yellow-500 text-white">Edit</a>
                        <form action="{{ route('admin.toys.delete', $toy) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-black border-2 px-3 py-1 rounded bg-red-500 text-white">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

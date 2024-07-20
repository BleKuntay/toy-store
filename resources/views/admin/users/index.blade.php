@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <a href="/admin" class="w-fit px-5 py-3 me-auto ms-5 rounded-lg bg-btn text-white">BACK</a>
        <h1 class="text-3xl font-bold text-secondary">Manage Users</h1>
        <div class="w-full pt-5 flex flex-col items-center">
            @foreach($users as $user)
                <div class="w-[80%] p-4 border-black border-2 rounded-2xl flex flex-row items-center justify-between mb-4">
                    <div>
                        <h2>{{ $user->firstName }} {{ $user->lastName }}</h2>
                        <h3>Email: {{ $user->email }}</h3>
                        <h3>Role: {{ $user->role }}</h3>
                        <h3>Money: ${{ $user->money }}</h3>
                    </div>
                    <div class="flex flex-row gap-2">
                        <a href="{{ route('admin.users.edit', $user) }}" class="border-black border-2 px-3 py-1 rounded bg-yellow-500 text-white">Edit</a>
                        <form action="{{ route('admin.users.delete', $user) }}" method="post">
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

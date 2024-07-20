@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">Admin Dashboard</h1>
        <div class="w-full pt-5 flex flex-col items-center">
            <a href="{{ route('admin.toys.index') }}" class="w-1/2 border-2 border-black rounded-xl p-5 text-center bg-green-500 text-white mb-5">Manage Toys</a>
            <a href="{{ route('admin.users.index') }}" class="w-1/2 border-2 border-black rounded-xl p-5 text-center bg-green-500 text-white">Manage Users</a>
        </div>
    </div>
@endsection

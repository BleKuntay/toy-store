@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">Edit User</h1>
        <form action="{{ route('admin.users.update', $user) }}" method="post" class="w-[80%] p-5 border-black border-2 rounded-2xl flex flex-col items-center">
            @csrf
            @method('put')
            <label for="firstName" class="w-full">First Name:</label>
            <input type="text" name="firstName" class="w-full mb-4" value="{{ $user->firstName }}" required>

            <label for="lastName" class="w-full">Last Name:</label>
            <input type="text" name="lastName" class="w-full mb-4" value="{{ $user->lastName }}" required>

            <label for="email" class="w-full">Email:</label>
            <input type="email" name="email" class="w-full mb-4" value="{{ $user->email }}" required>

            <label for="role" class="w-full">Role:</label>
            <input type="text" name="role" class="w-full mb-4" value="{{ $user->role }}" required>

            <label for="money" class="w-full">Money:</label>
            <input type="number" name="money" class="w-full mb-4" value="{{ $user->money }}" required>

            <button type="submit" class="w-full border-black border-2 p-3 rounded-xl bg-green-500 text-white">Update User</button>
        </form>
    </div>
@endsection

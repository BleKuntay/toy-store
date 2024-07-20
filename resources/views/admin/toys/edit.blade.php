@extends('layout.index')

@section('container')
    <div class="w-full min-h-screen pt-5 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-secondary">Edit Toy</h1>
        <form action="{{ route('admin.toys.update', $toy) }}" method="post" class="w-[80%] p-5 border-black border-2 rounded-2xl flex flex-col items-center">
            @csrf
            @method('put')
            <label for="name" class="w-full">Name:</label>
            <input type="text" name="name" class="w-full mb-4" value="{{ $toy->name }}" required>

            <label for="category_id" class="w-full">Category:</label>
            <select name="category_id" class="w-full mb-4" required>
                @foreach(App\Models\Category::all() as $category)
                    <option value="{{ $category->category_id }}" {{ $toy->category_id == $category->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="price" class="w-full">Price:</label>
            <input type="number" name="price" class="w-full mb-4" value="{{ $toy->price }}" required>

            <label for="image" class="w-full">Image URL:</label>
            <input type="text" name="image" class="w-full mb-4" value="{{ $toy->image }}" required>

            <label for="description" class="w-full">Description:</label>
            <textarea name="description" class="w-full mb-4" required>{{ $toy->description }}</textarea>

            <label for="stock" class="w-full">Stock:</label>
            <input type="number" name="stock" class="w-full mb-4" value="{{ $toy->stock }}" required>

            <button type="submit" class="w-full border-black border-2 p-3 rounded-xl bg-green-500 text-white">Update Toy</button>
        </form>
    </div>
@endsection

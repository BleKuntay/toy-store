<form method="GET" action="{{ route('dashboard') }}" class="w-full max-w-lg mb-5 pt-5">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
                Category
            </label>
            <div class="relative">
                <select name="category" id="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="">All</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_id }}" {{ request('category') == $category->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                Maximum Price
            </label>
            <input name="price" id="price" type="number" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ request('price') }}">
        </div>
    </div>
    <div class="flex items-center justify-between w-full">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded" type="submit">
            Filter
        </button>
    </div>
</form>

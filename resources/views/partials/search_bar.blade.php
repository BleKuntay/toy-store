<form method="GET" action="{{ route('dashboard') }}" class="max-w-[50%] w-[100%] px-2 py-1 bg-white flex flex-row items-center justify-between rounded-3xl">
    <input type="text" name="search" class="w-[100%] mx-1 bg-transparent py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Search toys..." value="{{ request('search') }}">
    <button type="submit" class="w-[2rem] h-auto ">
        <img src="{{ asset('images/search.svg') }}" alt="Search" class='w-[1.5rem]'>
    </button>
</form>

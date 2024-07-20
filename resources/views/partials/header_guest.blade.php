<div class='flex flex-row justify-between items-center px-7 py-4 bg-secondary'>
    <h1 class='text-2xl text-btn2 font-bold'>
        TOY <span class='text-white'>STORE</span>
    </h1>
    @include('partials.search_bar')
    <div class='flex flex-row gap-3'>
        <button class='w-fit text-gray-400 flex flex-row items-center gap-2 hover:text-white hover:transition'>
            <a href="{{ route('login.form') }}">LOG IN</a>
        </button>
        <button class='w-fit text-gray-400 flex flex-row items-center gap-2 hover:text-white hover:transition'>
            <a href="/register">REGISTER</a>
        </button>
    </div>
</div>

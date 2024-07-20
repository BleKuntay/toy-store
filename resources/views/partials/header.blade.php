<div class='flex flex-row justify-between items-center px-7 py-4 bg-secondary'>
    <h1 class='text-2xl text-btn2 font-bold'>
        TOY <span class='text-white'>STORE</span>
    </h1>
    @include('partials.search_bar')
    <div class='flex flex-row items-center gap-8'>
        <h5 class="text-white text-xl">$ 0</h5>
        <a href="{{ route('cart') }}"><img src="{{ asset('images/cart.svg') }}" alt="Cart" class='w-[35px] '></a>
        <a href="{{ route('logout') }}"><img src="{{ asset('images/logout.svg') }}" alt="Logout" class='w-[35px]'></a>
    </div>
</div>

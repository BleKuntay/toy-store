<div class="max-w-sm rounded overflow-hidden shadow-lg my-4">
    <img class="w-full" src="{{ $item->image_url }}" alt="{{ $item->name }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $item->name }}</div>
        <p class="text-gray-700 text-base">
            {{ $item->description }}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">${{ $item->price }}</span>
    </div>
</div>

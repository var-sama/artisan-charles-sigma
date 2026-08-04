@props(['type'])
@if ($type === 'ERROR')
    <div class="mb-8 border-b border-red-500 bg-red-100 rounded-lg p-4">
        <h1 class="text-lg text-red-500 font-bold">Error</h1>
        <p class="text-lg text-red-500">{{ $slot }}</p>
    </div> <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->    
@elseif($type === 'WARNING')
    <div class="mb-8 border-b border-yellow-500 bg-yellow-100 rounded-lg p-4">
        <h1 class="text-lg text-yellow-500 font-bold">Error</h1>
        <p class="text-lg text-yellow-500">{{ $slot }}</p>
    </div> <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
@else
    <div class="mb-8 border-b border-blue-500 bg-blue-100 rounded-lg p-4">
        <h1 class="text-lg text-blue-500 font-bold">Error</h1>
        <p class="text-lg text-blue-500">{{ $slot }}</p>
    </div>
@endif
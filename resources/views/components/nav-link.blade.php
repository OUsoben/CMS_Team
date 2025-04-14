@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? "flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start bg-blue-200 text-blue-950": "flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-200 hover:text-blue-900"}}" aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
@props(['active' => false, 'type' => 'a'])

@php
 throw_if(
     $type !== 'a' and $type !== 'button',
     RuntimeException::class,
     "nav-link type must be 'a' or 'button' - you passed type='{$type}'"
 )
@endphp

@if($type === 'a')
    <a
        {{ $attributes }}
        aria-current="{{ $active ? 'page' : 'false'}}"
        class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </a>
@elseif($type === 'button')
    <button
        type="button"
        {{ $attributes }}
        aria-current="{{ $active ? 'page' : 'false'}}"
        class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </button>
@endif

@props(['active' => false])

<a  aria-current={{ $active ? 'page' : 'false' }}
{{ $attributes }}>
    {{ $slot }}
</a>

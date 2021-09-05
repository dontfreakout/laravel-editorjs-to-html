@php
    /**
    *    @var string $url
    *    @var string $caption
    *    @var boolean $stretched
    *    @var boolean $withBorder
    *    @var boolean $withBackground
    */

    $class = $withBorder ? 'p-2 rounded border border-gray-200' : '';
    $class .= $withBackground ? ' bg-white' : '';

@endphp

<div class="my-4 {{ $class }}">
    <img src="{{ $url }}" alt="{{ $caption }}">
    <div class="italic">{{ $caption }}</div>
</div>


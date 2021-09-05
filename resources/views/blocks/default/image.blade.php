@php
    /**
    *    @var string $url
    *    @var string $caption
    *    @var boolean $stretched
    *    @var boolean $withBorder
    *    @var boolean $withBackground
    */
@endphp

<div>
    <img src="{{ $url }}" alt="{{ $caption }}">
    <div>{{ $caption }}</div>
</div>


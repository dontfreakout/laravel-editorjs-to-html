@php
    /**
    * @var int $level
    * @var string $text text with inline html elements
    */
@endphp

<h{{ $level }}>
    {!! $text !!}
</h{{ $level }}>

@php
    /**
    * @var int $level
    * @var string $text text with inline html elements
    */

    switch ($level) {
        case 1:
            $size = 'text-4xl font-bold';
            break;
        case 2:
            $size = 'text-3xl mt-4';
            break;
        case 3:
            $size = 'text-2xl mt-4';
            break;
        case 4:
            $size = 'text-xl mt-4';
            break;
        default:
            $size = 'text-lg mt-4';
            break;
    }
@endphp

<h{{ $level }} class="{{ $size }} mb-2">
    {!! $text !!}
</h{{ $level }}>

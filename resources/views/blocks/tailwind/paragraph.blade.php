@php
    /** @var string $text */

    if (isset($block['tunes']['textAligment']['alignment'])) {
        switch ($block['tunes']['textAligment']['alignment']) {
            case 'left':
                $alignment = ' text-left';
                break;
            case 'right':
                $alignment = ' text-right';
                break;
            case 'center':
                $alignment = ' text-center';
                break;
            default:
                $alignment = '';
                break;
        }
    }
@endphp

<p class="mb-4{{ $alignment ?? '' }}">{!! $text !!}</p>

@php
    /**
    *   @var string $text "There are dozens of ready-to-use Blocks and the simple API for creation any Block you need. For example, you can implement Blocks for Tweets, Instagram posts, s ▶"
    *   @var string $caption "Simon says"
    *   @var string $alignment "center"
    */

    switch ($alignment) {
        case 'center':
            $alignment_class = 'text-center';
            break;
        case 'left':
            $alignment_class = 'text-left';
            break;
        case 'right':
            $alignment_class = 'text-right';
            break;
    }
@endphp

<figure>
    <blockquote>
        <p class="{{ $alignment_class }}">{!! $text !!}</p>
    </blockquote>
    <figcaption>{!! $caption !!}</figcaption>
</figure>


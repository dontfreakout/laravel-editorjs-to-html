@php
    /**
    *   @var string $text "There are dozens of ready-to-use Blocks and the simple API for creation any Block you need. For example, you can implement Blocks for Tweets, Instagram posts, s ▶"
    *   @var string $caption "Simon says"
    *   @var string $alignment "center"
    */

    switch ($alignment) {
        case 'center':
            $quote_alignment = 'text-center';
            $caption_alignment = 'text-center';
            break;
        case 'left':
            $quote_alignment = 'text-left';
            $caption_alignment = 'text-right';
            break;
        case 'right':
            $quote_alignment = 'text-right';
            $caption_alignment = 'text-left';
            break;
    }
@endphp

<figure class="border-l-8 italic border-gray-300 shadow-lg bg-white px-4 py-3 my-4">
    <blockquote>
        <p class="{{ $quote_alignment }}">{!! $text !!}</p>
    </blockquote>
    <figcaption class="text-sm font-semibold pt-2 underline {{ $caption_alignment }}">{!! $caption !!}</figcaption>
</figure>

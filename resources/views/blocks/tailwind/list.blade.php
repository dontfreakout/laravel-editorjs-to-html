@php
    // Annotated variables for type hinting in Blade templates
    /**
    * @var array $items
    * @var string $style 'ordered' or 'unordered'
    */

    switch ($style) {
        case 'ordered':
            $element = 'ol';
            $style = 'list-decimal';
            break;
        case 'unordered':
        default:
            $element = 'ul';
            $style = 'list-disc';
    }
@endphp

<{{ $element }} class="my-4 list-inside text-gray-400 {{ $style }}">
    @foreach($items as $item)
    <li><div class="text-black inline-block">{!! $item !!}</div></li>
    @endforeach
</{{ $element }}>

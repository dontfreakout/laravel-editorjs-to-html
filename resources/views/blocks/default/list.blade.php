@php
    // Annotated variables for type hinting in Blade templates
    /**
    * @var array $items
    * @var string $style 'ordered' or 'unordered'
    */

    switch ($style) {
        case 'ordered':
            $element = 'ol';
            break;
        case 'unordered':
        default:
            $element = 'ul';
    }
@endphp

<{{ $element }}>
    @foreach($items as $item)
    <li>{!! $item !!}</li>
    @endforeach
</{{ $element }}>

@php
    /**
    *   @var string $embed
    *   @var int $width
    *   @var int $height
    *   @var string $source
    *   @var string $caption
    *   @var string $service
    */
@endphp

<div class="my-4">
@switch($service)
    @case('youtube')

            <iframe class="mx-auto" style="width:{{ $width }}px" height="{{ $height }}" frameborder="0" allowfullscreen="" src="{{ $embed }}"></iframe>
            @if(!empty($caption))
                <div class="mx-auto italic" style="width:{{ $width }}px">{{ $caption }}</div>
        @endif
        @break
    @default
        <div>Missing <b>{{$service}}</b> service view for source <a href="{{$source}}">{{$source}}</a></div>
@endswitch
</div>

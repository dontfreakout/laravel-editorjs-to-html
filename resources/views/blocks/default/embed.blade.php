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

@switch($service)
    @case('youtube')
        <div>
            <iframe style="width:{{ $width }}" height="{{ $height }}" frameborder="0" allowfullscreen="" src="{{ $embed }}"></iframe>
            @if(!empty($caption))<div>{{ $caption }}</div>@endif
        </div>
        @break
    @default
        <div>Missing <b>{{$service}}</b> service view for source <a href="{{$source}}">{{$source}}</a></div>
@endswitch


<div {{ $attributes }}>
@foreach($blocks as $block)
        @includeFirst($viewName($block['type']), $block['data'])
@endforeach
</div>

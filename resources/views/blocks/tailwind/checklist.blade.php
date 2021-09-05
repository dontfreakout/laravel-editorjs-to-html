
<ul class="my-4 leading-relaxed">
    @foreach($items as $item)
        <li>
            <input type="checkbox" {{ $item['checked'] ? 'checked' : '' }} disabled class="mr-2">
            <span>{!! $item['text'] !!}</span>
        </li>
    @endforeach
</ul>



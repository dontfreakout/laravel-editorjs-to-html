
<ul>
    @foreach($items as $item)
        <li>
            <input type="checkbox" {{ $item['checked'] ? 'checked' : '' }} disabled>
            <span>{!! $item['text'] !!}</span>
        </li>
    @endforeach
</ul>




<table>
    @foreach($content as $row)
        <tr>
        @if ($withHeadings === true && $loop->first)
            @foreach($row as $col)
                <th>{!! $col !!}</th>
            @endforeach
        @else
            @foreach($row as $col)
                <td>{!! $col !!}</td>
            @endforeach
        @endif
        </tr>
    @endforeach
</table>

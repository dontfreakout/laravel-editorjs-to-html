<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg my-4">
    <table class="min-w-full divide-y divide-gray-200">
        @foreach($content as $row)
            @if ($withHeadings === true && $loop->first)
                <thead class="bg-gray-50">
                <tr>
                    @foreach($row as $col)
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {!! $col !!}
                        </th>
                    @endforeach
                </tr>
                </thead>
            @else
                {!! $loop->iteration == 2 ? '<tbody class="bg-white divide-y divide-gray-200">' : '' !!}
                <tr>
                    @foreach($row as $col)
                        <td class="px-6 py-4">{!! $col !!}</td>
                    @endforeach
                </tr>
            @endif
        @endforeach
        {!! $loop->iteration == 2 ? '</tbody>' : '' !!}
    </table>
</div>

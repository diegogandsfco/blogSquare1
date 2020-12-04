
<div class="table-responsive">
    <table id="tablaDatos" class="table table-borderless table-striped" data-toggle="table">
        <thead>
            <th class="text-center">Id</th>
            <th class="text-center">Título</th>
            <th class="text-center"data-sortable="true">Fecha</th>
        </thead>
        <tbody>
        @foreach($entries as $entry)
            <tr>
                <td class="text-center"><a href="{{ url('/blogEntry') }}/{{ $entry->id }}">{{ $entry->id }}</a></td>
                <td class="text-left">{{ $entry->title }}</td>
                <td class="text-center">{{ date('d-m-Y',strtotime($entry->publication_date)) }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>

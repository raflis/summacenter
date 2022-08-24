<table>
    <thead>
    <tr>
        <th><strong>N°</strong></th>
        <th><strong>Nombres</strong></th>
        <th><strong>Apellidos</strong></th>
        <th><strong>Documento</strong></th>
        <th><strong>Teléfono</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Curso interesado</strong></th>
        <th><strong>Desde</strong></th>
        <th><strong>Fecha de registro</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->lastname }}</td>
            <td>{{ $record->document }}</td>
            <td>{{ $record->telephone }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->interested_course }}</td>
            <td>{{ ($record->from == 'curso')?'Página de curso':'Página de inicio'}}</td>
            <td>{!! \Carbon\Carbon::parse($record->created_at)->format('d/m/Y') !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
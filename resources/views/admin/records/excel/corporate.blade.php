<table>
    <thead>
    <tr>
        <th><strong>N°</strong></th>
        <th><strong>Nombres</strong></th>
        <th><strong>Apellidos</strong></th>
        <th><strong>Tipo de documento</strong></th>
        <th><strong>Documento</strong></th>
        <th><strong>Teléfono</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Empresa</strong></th>
        <th><strong>RUC</strong></th>
        <th><strong>Cargo</strong></th>
        <th><strong>¿Llamar y enviar sms al teléfono?</strong></th>
        <th><strong>Fecha de registro</strong></th>
        <th><strong>Detalle</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->name }}</td>
            <td>{{ $record->lastname }}</td>
            <td>{{ $record->type_document }}</td>
            <td>{{ $record->document }}</td>
            <td>{{ $record->telephone }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->company }}</td>
            <td>{{ $record->ruc }}</td>
            <td>{{ $record->position }}</td>
            <td>{{ ($record->call_sms == 0)?'No':'Si' }}</td>
            <td>{!! \Carbon\Carbon::parse($record->created_at)->format('d/m/Y') !!}</td>
            <td>{{ $record->observation }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
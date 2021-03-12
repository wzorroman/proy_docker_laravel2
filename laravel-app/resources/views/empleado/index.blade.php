Despliegue de empleados
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>
    @foreach($trabajadores as $empleado)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <th>{{ $empleado->Foto }}</th>
            <th>{{ $empleado->Nombre }}</th>
            <th>{{ $empleado->ApellidoPaterno}}</th>
            <th>{{ $empleado->ApellidoMaterno}}</th>
            <th>{{ $empleado->Correo}}</th>
            <th>Editar | borrar </th>
        </tr>
    @endforeach
    </tbody>
</table>

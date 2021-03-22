Listado de empleados
<hr>
<a href="{{ url('empleados/create') }}">Agregar Empleado</a>
<br>
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
            <th>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
            </th>
            <th>{{ $empleado->Nombre }}</th>
            <th>{{ $empleado->ApellidoPaterno}}</th>
            <th>{{ $empleado->ApellidoMaterno}}</th>
            <th>{{ $empleado->Correo}}</th>
            <th>
                <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">Editar</a>
                |
                <form method="POST" action="{{ url('/empleados/'.$empleado->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                </form>
            </th>
        </tr>
    @endforeach
    </tbody>
</table>

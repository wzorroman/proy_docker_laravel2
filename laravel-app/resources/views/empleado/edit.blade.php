# editar registro
<form action="{{ url('/empleados/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    @include('empleado.form', ['Modo'=>'editar'])

</form>

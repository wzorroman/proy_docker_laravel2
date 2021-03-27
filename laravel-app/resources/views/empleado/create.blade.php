Crear un empleado
<form action="{{ url('/empleados')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('empleado.form', ['Modo'=>'crear'])
</form>

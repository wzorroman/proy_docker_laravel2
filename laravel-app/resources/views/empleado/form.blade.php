<h4>{{ $Modo=='crear' ? 'Agregar':'Modificar' }} Empleado</h4>
<table style="padding: 2%;">
    <tr>
        <td><label for="nombre">{{'Nombre'}}</label></td>
        <td><input type="text" name="nombre" id="id_nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" placeholder="nombres"></td>
    </tr>
    <tr>
        <td><label for="id_apellidopaterno">{{'Apellido paterno'}}</label></td>
        <td><input type="text" name="apellidopaterno" id="id_apellidopaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}"  placeholder="paterno"></td>
    </tr>
    <tr>
        <td><label for="id_apellidomaterno">{{'Apellido materno'}}</label></td>
        <td><input type="text" name="apellidomaterno" id="id_apellidomaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}"  placeholder="materno"></td>
    </tr>
    <tr>
        <td><label for="id_correo">{{'Correo'}}</label></td>
        <td><input type="email" name="correo" id="id_correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}"  placeholder="email"></td>
    </tr>
    <tr>
        <td><label for="id_foto">{{'Foto'}}</label></td>
        <td>
            @if(isset($empleado->Foto))
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
                <br>
            @endif
            <input type="file" name="foto" id="id_foto" value="{{ isset($empleado->Foto)?$empleado->Foto:'' }}">
        </td>
    </tr>
</table>
<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Actualizar' }}">
<a href="{{ url('empleados') }}">Regresar</a>

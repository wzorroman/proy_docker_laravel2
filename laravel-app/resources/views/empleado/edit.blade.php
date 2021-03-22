# editar registro
<form action="{{ url('/empleados/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <table style="padding: 2%;">
        <tr>
            <td><label for="nombre">{{'Nombre'}}</label></td>
            <td><input type="text" name="nombre" id="id_nombre" value="{{ $empleado->Nombre }}" placeholder="nombres"></td>
        </tr>
        <tr>
            <td><label for="id_apellidopaterno">{{'Apellido paterno'}}</label></td>
            <td><input type="text" name="apellidopaterno" id="id_apellidopaterno" value="{{ $empleado->ApellidoPaterno }}"  placeholder="paterno"></td>
        </tr>
        <tr>
            <td><label for="id_apellidomaterno">{{'Apellido materno'}}</label></td>
            <td><input type="text" name="apellidomaterno" id="id_apellidomaterno" value="{{ $empleado->ApellidoMaterno }}"  placeholder="materno"></td>
        </tr>
        <tr>
            <td><label for="id_correo">{{'Correo'}}</label></td>
            <td><input type="email" name="correo" id="id_correo" value="{{ $empleado->Correo }}"  placeholder="email"></td>
        </tr>
        <tr>
            <td><label for="id_foto">{{'Foto'}}</label></td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="200">
                <br>
                <input type="file" name="foto" id="id_foto" value="">
            </td>
        </tr>
    </table>
    <input type="submit" value="Actualizar">
</form>

Crear un empleado
<form action="{{ url('/empleados')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table style="padding: 2%;">
        <tr>
            <td><label for="nombre">{{'Nombre'}}</label></td>
            <td><input type="text" name="nombre" id="id_nombre" value="" placeholder="nombres"></td>
        </tr>
        <tr>
            <td><label for="id_apellidopaterno">{{'Apellido paterno'}}</label></td>
            <td><input type="text" name="apellidopaterno" id="id_apellidopaterno" value=""  placeholder="paterno"></td>
        </tr>
        <tr>
            <td><label for="id_apellidomaterno">{{'Apellido materno'}}</label></td>
            <td><input type="text" name="apellidomaterno" id="id_apellidomaterno" value=""  placeholder="materno"></td>
        </tr>
        <tr>
            <td><label for="id_correo">{{'Correo'}}</label></td>
            <td><input type="email" name="correo" id="id_correo" value=""  placeholder="email"></td>
        </tr>
        <tr>
            <td><label for="id_foto">{{'Foto'}}</label></td>
            <td><input type="file" name="foto" id="id_foto" value=""></td>
        </tr>
    </table>
    <input type="submit" value="agregar">
</form>

Crear Empleados

 <form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}


       <label for="Nombre">{{'Nombre'}}</label>
       <input type="text" name="Nombre" id="Nombre" value="">

        <label for="apellidoPaterno">{{'apellidoPaterno'}}</label>
       <input type="text" name="apellidoPaterno" id="apellidoPaterno" value="">

        <label for="apellidoMaterno">{{'apellidoMaterno'}}</label>
       <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="">

       <label for="correo">{{'correo'}}</label>
       <input type="email" name="correo" id="correo" value="">

       <label for="foto">{{'foto'}}</label>
       <input type="file" name="foto" id="foto" value="">


       <input type="submit" value="Agregar">


</form>


<form action="{{url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">  

       {{ csrf_field()}}
       {{ method_field('PATCH')}}

          <label for="Nombre">{{'Nombre'}}</label>
          <input type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
          <br/>
   
           <label for="apellidoPaterno">{{'apellidoPaterno'}}</label>
          <input type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
          <br/>
   
           <label for="apellidoMaterno">{{'apellidoMaterno'}}</label>
          <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
          <br/>
   
          <label for="correo">{{'correo'}}</label>
          <input type="email" name="correo" id="correo" value="{{$empleado->Correo}}">
          <br/>
   
          <label for="foto">{{'foto'}}</label>
          <br/>
          <img src="{{ asset('storage').'/'. $empleado->Foto}}" alt="" width="200"> 
         <br/>

          <input type="file" name="foto" id="foto" value="">
   
   
          <input type="submit" value="Editar">
   
   
   </form>
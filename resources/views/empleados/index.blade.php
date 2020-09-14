Despliegue de Datos

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Apellido 2</th>
            <th>Vorreo</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)            
      
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>

                <img src="{{ asset('storage').'/'. $empleado->Foto}}" alt="" width="200">         



            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>            
            <td>

                <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>


                | 


                <form method="post" action="{{url('/empleados/'.$empleado->id)}}">

                    {{csrf_field()}}
                    {{method_field('DELETE')}} 
                    <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>


                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
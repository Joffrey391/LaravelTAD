<a href="{{ url('persona/create') }}">Registrar nueva persona</a>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{ $persona->id}}</td>
            <td>{{ $persona->Nombre}}</td>
            <td>{{ $persona->Apellidos}}</td>
            <td>{{ $persona->Edad}}</td>
            <td>
                
            <a href="{{ url('/persona/'.$persona->id.'/edit') }}">
                Editar 
            </a>
            
                <form action="{{ url('/persona/'.$persona->id ) }}" method="post">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Quieres borrar?')" 
                    value="Borrar">
                </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
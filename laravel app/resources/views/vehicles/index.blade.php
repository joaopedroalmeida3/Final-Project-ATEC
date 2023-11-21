<table>
    <thead>
        <tr>
            <td>Modelo</td>
            <td>Ano</td>
            <td>Km</td>
            <td>Brand</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->year }}</td>
            <td>{{ $vehicle->km }}</td>
            <td>{{ $vehicle->brand }}</td>
            
            <td>
                <a href="/vehicles/{{ $vehicle->id }}">Detalhes</a>
                <a href="/vehicles/{{ $vehicle->id }}/edit">Editar</a>
                <form method="post" action="/vehicles/{{ $vehicle->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
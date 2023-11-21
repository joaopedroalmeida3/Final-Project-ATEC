<table>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        @foreach($instructors as $instructor)
        <tr>
            <td>{{ $instructor->name }}</td>
            <td>{{ $instructor->phone }}</td>
            <td>{{ $instructor->email }}</td>
            
            <td>
                <a href="/instructors/{{ $instructor->id }}">Detalhes</a>
                <a href="/instructors/{{ $instructor->id }}/edit">Editar</a>
                <form method="post" action="/instructors/{{ $instructor->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
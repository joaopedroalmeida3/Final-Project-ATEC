<table>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="/students/{{ $student->id }}">Detalhes</a>
                <a href="/students/{{ $student->id }}/edit">Editar</a>
                <form method="post" action="/students/{{ $student->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
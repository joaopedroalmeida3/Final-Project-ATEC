<table>
    <thead>
        <tr>
            <td>Nome</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/categories/{{ $category->id }}">Detalhes</a>
                <a href="/categories/{{ $category->id }}/edit">Editar</a>
                <form method="post" action="/categories/{{ $category->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
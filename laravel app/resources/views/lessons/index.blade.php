@foreach($lessons as $lesson)
        <tr>
            <td>{{ $lesson->instructor_id }}</td>
            <td>{{ $lesson->vehicle_id }}</td>
            <td>{{ $lesson->category_student_id }}</td>
            <td>
                <a href="/lessons/{{ $lesson->id }}">Detalhes</a>
                <a href="/lessons/{{ $lesson->id }}/edit">Editar</a>
                <form method="post" action="/lessons/{{ $lesson->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                </form> 
            </td>
        </tr>
        @endforeach
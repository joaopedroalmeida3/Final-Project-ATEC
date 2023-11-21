
<form method="post" action="/students/{{ $student->id }}">
    {{ method_field('PUT') }}
    @include('students.form')
    {{ csrf_field() }}
                 
    @if($student->status==1)
        <a href="/students/estado/{{$student->id}}"><i class="fa fa-times text-center" title="Ativar Estado do Aluno"></i>  </a>                                   
    @else 
        <a href="/students/unestado/{{$student->id}}"> <i class="fa fa-check text-center" title="Desativar o Aluno"> </i></a>
    @endif
                 
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>


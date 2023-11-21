@section('title')
{{ $student->id }} - {{ $student->name }}
@endsection


<p>
    <b>Nome</b>
    {{ $student->name }}
</p>
<p>
    <b>Email</b>
    {{ $student->email }}
</p>
<p>
    <b>Telefone</b>
    {{ $student->phone }}
</p>


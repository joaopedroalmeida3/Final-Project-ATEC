@section('title')
{{ $instructor->id }} - {{ $instructor->name }}
@endsection


<p>
    <b>Nome</b>
    {{ $instructor->name }}
</p>
<p>
    <b>Email</b>
    {{ $instructor->email }}
</p>
<p>
    <b>Telefone</b>
    {{ $instructor->phone }}
</p>
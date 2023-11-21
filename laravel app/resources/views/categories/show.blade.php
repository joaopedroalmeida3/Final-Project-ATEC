@section('title')
{{ $category->id }} - {{ $category->name }}
@endsection


<p>
    <b>Nome</b>
    {{ $category->name }}
</p>
@section('title')
{{ $vehicle->id }} - {{ $vehicle->model }}
@endsection


<p>
    <b>Modelo</b>
    {{ $vehicle->model }}
</p>
<p>
    <b>Ano</b>
    {{ $vehicle->year }}
</p>
<p>
    <b>Km</b>
    {{ $vehicle->km }}
</p>
<p>
    <b>Marca</b>
    {{ $vehicle->brand }}
</p>


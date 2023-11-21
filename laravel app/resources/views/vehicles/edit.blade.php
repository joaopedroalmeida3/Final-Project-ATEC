<form method="post" action="/vehicles/{{ $vehicle->id }}">
    {{ method_field('PUT') }}
    @include('vehicles.form')
    {{ csrf_field() }}
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>
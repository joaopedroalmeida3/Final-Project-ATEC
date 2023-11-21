<form method="post" action="/instructors/{{ $instructor->id }}">
    {{ method_field('PUT') }}
    @include('instructors.form')
    <p>
        <input type="submit" value="Alterar">
    </p>
</form>
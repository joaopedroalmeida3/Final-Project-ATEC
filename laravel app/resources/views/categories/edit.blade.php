<form method="post" action="/categories/{{ $category->id }}">
{{ method_field('PUT') }}
@include('categories.form')
<p>
    <input type="submit" value="Alterar">
</p>
</form>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Categories</title>
</head>
<body>

<h1>Daftar Categories</h1>

@foreach ($categories as $category)
    <article>
        <h2>{{ $category->name }}</h2>
        <p>Slug: {{ $category->slug }}</p>
    </article>
@endforeach

</body>
</html>

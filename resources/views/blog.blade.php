<x-layouts.app title="Blog" meta-description="blog meta descripton">

    <h1>Blog</h1>

    @foreach ($posts as $key => $value)
    {{ $key }}: {{ $value }} <br>
    @endforeach




</x-layouts.app>
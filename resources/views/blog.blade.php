{{--Comentarios en blade--}}
{{--Otra forma de llamar a los componentes--}}
{{--
    <x-layout>
        <h1>BLOG</h1>
    <x-layout>
--}}
<x-layout meta-title="Blog title" meta-description="Blog desciption">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach
</x-layout>
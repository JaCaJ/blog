<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>{{ $metatitle ?? 'Blog' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Descipción' }}">
</head>

<body>
    @include('partials.navigation')
    {{ $slot }}
    @isset($sidebar)
        <div id="sidebar">
            <h3>Sidebar</h3>
            <div>
                {{ $sidebar }}
            </div>
        </div>
    @endisset
</body>

</html>

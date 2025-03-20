<!DOCTYPE html>
<html>
<head>
    <title>Available Tools</title>
</head>
<body>
    <h2>Available Tools</h2>

    @if($apps->count())
        <ul>
            @foreach($apps as $app)
                <li>
                    <a href="{{ route('app.show', $app->slug) }}">
                        {{ $app->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No tools available.</p>
    @endif

</body>
</html>

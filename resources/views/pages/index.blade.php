
<!doctype html>
<html>
    <head>
        <title>Mijn Project</title>
    </head>

    <body>

        <h1>Mijn Project</h1>

        <ul>
        @foreach($projects as $project)
            <a href="/projects/{{ $project->id }}">
                <li>{{ $project->title }}</li>
            </a>
        @endforeach
        </ul>

    </body>
</html>

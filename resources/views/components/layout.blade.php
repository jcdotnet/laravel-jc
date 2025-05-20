<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <title>José Carlos Román Rubio || Software Developer</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="page-container">
        <div id="main-content">
            {{$slot}}
        </div>
        <footer>
            <div class="bg-(--color-accent) py-7">
                <p class="text-center text-white font-medium">Copyright &copy; {{date('Y')}} José Carlos Román Rubio</p>
            </div>
        </footer>
    </div>
    <x-body-scripts>
        @if ( request()->is('/') )
            <script src="{{asset('scripts/typewriter.js')}}"></script>
        @endif
    </x-body-scripts>
</body>
</html>
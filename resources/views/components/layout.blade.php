<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>José Carlos Román Rubio || Software Developer</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="page-container" clasS="flex flex-col min-h-screen">
        <div id="main-content" class="flex flex-1">
            {{$slot}}
        </div>
        <footer>
            <div class="bg-(--color-accent) py-7">
                <p class="text-center text-white font-medium">Copyright &copy; {{date('Y')}} José Carlos Román Rubio</p>
            </div>
        </footer>
    </div>
</body>
</html>
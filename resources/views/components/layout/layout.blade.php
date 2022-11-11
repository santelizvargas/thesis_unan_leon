<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis</title>
    
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container">
        {{ $slot }}
    </main>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>

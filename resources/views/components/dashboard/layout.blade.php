<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    @vite('resources/css/components/dashboard/dashboard.css')
</head>

<body>

    <x-dashboard.navbar />
    <x-dashboard.sidebar />

    <main class="container">
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @vite('resources/js/app.js')
</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SigerNav</title>

    @vite(['resources/css/app.css'])

    <link rel="stylesheet"
          href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="bg-[#fffcf9]">

    @include('components.navbar')

    @yield('content')

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    @stack('scripts')

</body>
</html>
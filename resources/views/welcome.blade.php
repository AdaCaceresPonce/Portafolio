<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Ada Cáceres</title>
    @vite('resources/css/navbar.css')
</head>
@include('layouts.navbar')

<body class="bg-gray-50 text-gray-900">
    <!-- Navbar superior fijo y transparente -->
    <div class="fixed top-0 left-20 w-full bg-transparent flex justify-start items-center px-6 py-2 z-50">
        <div class="flex space-x-2 text-sm text-black">
            <a href="#" class="hover:underline">EN</a> | 
            <a href="#" class="hover:underline">ES</a>
        </div>
    </div>
  <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
</body>
</html>

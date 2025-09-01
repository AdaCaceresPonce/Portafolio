<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdaCP</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
{{-- <body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100"> --}}
<body class="bg-gray-50 text-gray-900">

    <!-- Navbar lateral fijo en desktop -->
    <div class="hidden md:flex fixed top-0 left-0 h-screen w-24 bg-[#D01744] flex-col items-center justify-between py-6">
    <a href="#"><i class="fa-solid fa-cat fa-2xl text-white"></i></a>
    <nav class="flex flex-col space-y-6">
        <a href="#"><i class="fa-brands fa-github text-2xl text-[#D8CFCF]"></i></a>
        <a href="#"><i class="fa-brands fa-twitter text-2xl text-[#D8CFCF]"></i></a>
        <a href="#"><i class="fa-brands fa-twitch text-2xl text-[#D8CFCF]"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp text-2xl text-[#D8CFCF]"></i></a>
    </nav>
    <div class="border-l-2 border-white h-40"></div>
    </div>

    <!-- Navbar móvil -->
    <div class="md:hidden fixed top-0 left-0 w-full bg-black flex items-center justify-between p-4 z-50">
        <a href="#"><i class="fa-solid fa-cat text-xl text-white"></i></a>
        <button id="menu-btn" class="text-white text-3xl">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden fixed top-0 left-0 w-full h-screen bg-black flex flex-col items-center justify-center space-y-6 z-40">
    <button id="close-btn" class="absolute top-4 right-6 text-white text-3xl">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <a href="#sobre-mi" class="text-2xl text-[#D8CFCF] hover:text-white">Sobre mí</a>
    <a href="#skills" class="text-2xl text-[#D8CFCF] hover:text-white">Skill</a>
    <a href="#proyectos" class="text-2xl text-[#D8CFCF] hover:text-white">Proyecto realizado</a>
    <a href="#certificados" class="text-2xl text-[#D8CFCF] hover:text-white">Certificados destacados</a>
    <a href="#contacto" class="text-2xl text-[#D8CFCF] hover:text-white">Contacto</a>
    </div>

    <!-- Script al final del body -->
    <script>
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    // Alterna el menú al dar clic en la hamburguesa
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // Cierra con el botón ❌
    closeBtn.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
    });
    </script>
</body>
</html>

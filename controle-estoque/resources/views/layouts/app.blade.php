<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Sofibor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-gray-800 text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between">
            <h1 class="text-lg font-bold">Sofibor – Controle de Estoque</h1>
            <div>
                <a href="{{ route('logout') }}" class="text-sm hover:underline">Sair</a>
            </div>
        </div>
    </header>

    <main class="p-6 max-w-7xl mx-auto">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 mt-10">
        &copy; {{ date('Y') }} Sofibor
    </footer>

</body>
</html>

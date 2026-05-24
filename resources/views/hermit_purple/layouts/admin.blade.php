<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermit Purple | @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#121212] text-[#F2F1ED] flex">
    <aside class="fixed left-0 top-0 w-70 h-screen bg-[#111111] border-r border-[#2A2A2A] px-6 py-8">
        <div class="mb-10">
            <h1 class="text-2xl font-semibold text-[#8865A9]">Hermit Purple</h1>
            <p class="text-sm text-gray-400 mt-1">Painel administrativo</p>
        </div>
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard.index') }}" class="block px-4 py-3 rounded-lg hover:bg-[#1A1A1A] hover:text-[#8865A9] transition">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.products.index') }}" class="block px-4 py-3 rounded-lg hover:bg-[#1A1A1A] hover:text-[#8865A9] transition">Produtos</a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.index') }}" class="block px-4 py-3 rounded-lg hover:bg-[#1A1A1A] hover:text-[#8865A9] transition">Clientes</a>
                </li>
                <li>
                    <a href="{{ route('admin.sales.index') }}" class="block px-4 py-3 rounded-lg hover:bg-[#1A1A1A] hover:text-[#8865A9] transition">Entregas</a>
                </li>
            </ul>
        </nav>
    </aside>
    <main class="ml-70 w-full p-10">
        @yield('content')
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen py-8 px-4 sm:px-6">
    <div class="max-w-3xl mx-auto bg-white border border-slate-200 shadow-sm rounded-xl p-6 sm:p-8">
        <header class="flex items-center justify-between pb-4 mb-6 border-b border-slate-100">
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                <a href="{{ route('posts.index') }}" class="hover:text-indigo-600 transition">Aplikasi Blog</a>
            </h1>
        </header>

        @foreach (['success', 'danger', 'warning', 'info'] as $type)
            @if (session($type))
                <x-alert :type="$type">
                    {{ session($type) }}
                </x-alert>
            @endif
        @endforeach

        {{-- @yield('content') adalah titik tempat konten index/create/show akan disisipkan --}}
        @yield('content')
    </div>
</body>
</html>
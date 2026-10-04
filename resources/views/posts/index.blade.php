@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Daftar Post</h2>
        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
            + Tambah Post Baru
        </a>
    </div>
    <form action="{{ route('posts.index') }}" method="GET" class="mb-6">
        <div class="flex items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari post..." class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-indigo-200">
            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
                Cari
            </button>
        </div>
    <div class="space-y-4">
        @if ($posts->isEmpty())
            <div class="text-center py-10 text-slate-400">
                <p>Belum ada post yang dibuat.</p>
            </div>
        @else
            @foreach ($posts as $p)
                <x-card>
                    <x-slot name="header">
                        @if ($p->image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $p->image) }}" alt={{ $p->title }} class="w-full h-48 object-cover rounded-lg">
                            </div>
                        @endif
                        <a href="{{ route('posts.show', $p) }}" class="hover:text-indigo-600 transition">
                            {{ $p->title }}
                        </a>
                    </x-slot>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4 line-clamp-3">
                            {{ $p->body }}
                        </p>

                    <div class="flex items-center gap-3 pt-3 border-t border-slate-200/70 text-xs">
                        <a href="{{ route('posts.show', $p) }}" class="text-indigo-600 font-medium hover:underline">
                            Baca selengkapnya →
                        </a>
                        <span class="text-slate-300">|</span>
                        <a href="{{ route('posts.edit', $p) }}" class="text-slate-600 hover:text-indigo-600 font-medium transition">
                            Edit
                        </a>
                        <span class="text-slate-300">|</span>
                        <form method="POST" action="{{ route('posts.destroy', $p) }}" onsubmit="return confirm('Hapus post ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:text-rose-800 font-medium transition">
                                    Hapus
                                </button>
                        </form>
                    </div>
                </x-card>
            @endforeach
        @endif
    </div>

    {{-- Pagination otomatis --}}
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
@endsection
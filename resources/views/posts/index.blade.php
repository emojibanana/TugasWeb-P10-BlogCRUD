@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-slate-800">Daftar Post</h2>
        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
            + Tambah Post Baru
        </a>
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
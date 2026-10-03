@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto py-6 sm:py-12">
    <h2 class="text-2xl font-bold text-slate-900 mb-6">Buat Post Baru</h2>
    <form action="{{route('posts.store')}}" method="POST" class="bg-white rounded-xl shadow-sm p-6 space-y-5">
        @csrf {{-- Proteksi wajib csrf --}}

        <div class="space-y-2">
            <label for="title" class="block text-slate-700 font-medium text-sm mb-1">Judul:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                placeholder="Judul post">
            @error('title')
                <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>

        <div class="space-y-2">
            <label for="body" class="block text-slate-700 font-medium text-sm mb-1">isi Post:</label>
            <textarea name="body" id="body" rows="6"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">{{old('body')}}</textarea>
            @error('body')
                <small class="text-red-500">{{$message}}</small>
            @enderror
        </div>

        <div class="pt-4">
            <button type="submit"
                class="w-flex items-center justify-center px-5 py-2.5 bg-indigo-600 text-white font-medium rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 disabled:opacity-50 transition">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
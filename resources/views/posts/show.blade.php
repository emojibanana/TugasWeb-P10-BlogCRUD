@extends('layouts.app') 
@section('content') 
    <article class="prose max-w-none"> 
        <h2 class="text-2xl font-bold text-slate-900 mb-2">
            {{ $post->title }}
        </h2> 
        <div class="text-xs text-slate-400 mb-6">
            Dibuat pada: {{ $post->created_at->format('d M Y, H:i') }}
        </div> 
        <div class="text-slate-700 leading-relaxed whitespace-pre-line mb-8 text-base">
            {{ $post->body }}
        </div> 
    </article> 

    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-sm"> 
        <a href="{{ route('posts.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">← Kembali ke Daftar Post</a> 
        <a href="{{ route('posts.edit', $post) }}" class="text-slate-600 hover:text-indigo-600 font-medium transition">Edit Post Ini</a>  
    </div>
@endsection
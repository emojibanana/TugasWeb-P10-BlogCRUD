<div class="p-5 rounded-lg border border-slate-200 bg-slate-50/60 hover:bg-slate-50 transition"> 
    @if (isset($header)) 
    <h3 class="text-lg font-bold text-slate-900 mb-2"> 
        {{ $header }} 
    </h3> 
    @endif 
    <div> 
        {{ $slot }} 
    </div> 
</div>
@props(['item'])
<p class="font-medium text-slate-800 text-sm">
     {{ $item->user->name }}
</p>
<p class="text-xs text-slate-500">
      {{ $item->created_at ? $item->created_at->diffForHumans() : 'Hace un momento' }}
</p>
<div>
    @if($user->enabled)
        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Activo</span>
    @else
        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Pendiente</span>
    @endif
</div>
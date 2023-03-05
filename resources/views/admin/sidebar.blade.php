<x-container>
    <h1 class="font-bold text-lg mb-4">Menu Admin</h1>
    <ul class="text-sm text-gray-600 mb-4">
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.users*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.users.index') }}">Usuarios</a>
        </li>
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.roles*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.roles.index') }}">Roles</a>
        </li>
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.sectors*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.sectors.index') }}">Sectores</a>
        </li>
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.doctypes*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.doctypes.index') }}">Documentos. Tipos</a>
        </li>
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.appconfigs*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.appconfigs.index') }}">Configuración</a>
        </li>
    </ul>
</x-container>
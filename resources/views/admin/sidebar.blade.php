<x-container>
    <h1 class="font-bold text-lg mb-4">{{ __('Admin menu') }}</h1>
    <ul class="text-sm text-gray-600 mb-4">
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.users*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.users.index') }}">{{ __('Users') }}</a>
        </li>
        <li class="leading-7 mb-1 border-l-4 @routeIs('admin.roles*') border-indigo-400 @endif pl-4">
            <a href="{{ route('admin.roles.index') }}">{{ __('Roles') }}</a>
        </li>
    </ul>
</x-container>
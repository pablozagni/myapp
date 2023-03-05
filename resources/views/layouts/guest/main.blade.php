<x-main-layout>
    <x-slot name="navbar">
        @include('guest.navbar')
    </x-slot>
    {{ $slot }}
</x-main-layout>

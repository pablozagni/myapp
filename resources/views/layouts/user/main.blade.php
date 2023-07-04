<x-main-layout>
    <x-slot name="navbar">
        @include('user.navbar')
    </x-slot>

    {{-- https://tailwindcomponents.com/component/responsive-sidebar-with-dropdown --}}

    <!-- component -->
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        @include('user.sidebar')

        <div class="items-start w-full">
            {{ $slot }}
        </div>
    </div>
</x-main-layout>

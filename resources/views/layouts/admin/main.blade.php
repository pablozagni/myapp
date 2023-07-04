<x-main-layout>
    <x-slot name="navbar">
        @include('admin.navbar')
    </x-slot>
    <div class="py-4 grid grid-cols-5">
        @include('admin.sidebar')
        <div class="col-span-4">
            <div class="text-gray-600 mx-2">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-main-layout>

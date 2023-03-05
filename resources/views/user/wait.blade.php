<x-user-layout>
    <x-container>
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
                <p class="uppercase tracking-loose">Bienvenido a {{ env('APP_NAME') }}</p>
                <h1 class="font-bold text-3xl my-4">Por favor, espere a que un administrador lo autorice.</h1>
                <p>Si lo desea, puede ir completando su perfil.</p>
            </div>
        </div>
    </x-container>
</x-user-layout>    

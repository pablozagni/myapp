<x-user-layout>
    <x-container>
        <h2>{{ __('New client') }}</h2>
        {!! Form::model( $client, ['route'=>['clients.store'],'class'=>'w-full','files'=>True]) !!}
            @include('user.clients.partials.form')
        </form>
    </x-container>
</x-user-layout>    

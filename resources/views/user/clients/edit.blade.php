<x-user-layout>
    <x-container>
        <h2>{{ __('Edit client') }}</h2>
        {!! Form::model( $client, ['route'=>['clients.update',$client],'method'=>'PUT','class'=>'w-full','files'=>True]) !!}
            @include('user.clients.partials.form')
        </form>
    </x-container>
</x-user-layout>    

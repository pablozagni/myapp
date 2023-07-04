<x-container>
    <h2>Clients</h2>
    <x-search>Search...</x-search>
    <a href="{{ route('clients.create') }}">
        <button class="btn btn-primary btn-sm">{{ __('New client') }}</button>
    </a>
    @if( $clients->count() )
        <div class="relative overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th class="text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>   
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('clients.edit',$client) }}">
                                        <button class="btn btn-primary btn-sm">Editar</button>
                                    </a>
                                    <button
                                        data-modal-target="deleteModal"
                                        data-modal-toggle="deleteModal"
                                        wire:click="quieroBorrar({{ $client->id }})"
                                        class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="p-2">
                            {{ $clients->links() }}        
                        </td>
                    </tr>
                </tfoot>
            </table>
            <x-modal-delete deleteName="{{ $deleteName }}"></x-modal-delete>
        </div>
    @else
        <div class="bg-gray-200 mt-2 rounded px-2 py-2"><p>No records found</p></div>
    @endif
</x-container>

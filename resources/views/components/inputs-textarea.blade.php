@props([
    'label','popup','name','value'
])

@push('head')
@if( isset($popup) )
    <style>
        .ck-editor__editable {
            height: 500px;
        }
    </style>
@else
    <style>
        .ck-editor__editable {
            height: 200px;
        }
    </style>
@endif
@endpush
<div class="grid grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    @if( isset($popup) )
        <div class="w-full col-span-2">
            <button
                type="button"
                data-modal-target="modalTextarea{{ $name }}"
                data-modal-toggle="modalTextarea{{ $name }}"
                class="btn btn-primary btn-sm"
            >Editar</button>
            @if ($errors->has($name))
            <div class="mt-2 text-sm text-red-400">{{ $errors->first($name) }}</div>
        @endif

        <!-- Main modal -->
        <div id="modalTextarea{{ $name }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $label }}
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalTextarea{{ $name }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <textarea 
                            {{-- style="min-height: 300px;" --}}
                            style="height: 300px; width: 200px;"
                            {{ $attributes->merge(['class'=>'ckeditor w-full form-control'])}} 
                            @if (isset($name)) id="{{ $name }}"  @endif
                            @if (isset($name)) name="{{ $name }}" @endif
                            @if (isset($value)) value="{{ $value }}" @endif
                        ></textarea>            
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modalTextarea{{ $name }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        </div>
    @else
        <div class="w-full col-span-2">
            <textarea
                {{ $attributes->merge(['class'=>'ckeditor w-full form-control'])}} 
                @if (isset($name)) id="{{ $name }}"  @endif
                @if (isset($name)) name="{{ $name }}" @endif
                @if (isset($value)) value="{{ $value }}" @endif
                >{{ $slot }}</textarea>
            @if ($errors->has($name))
                <div class="mt-2 text-sm text-red-400">{{ $errors->first($name) }}</div>
            @endif
        </div>
    @endif
</div>

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>    
    @if( isset($popup) )
        <script>
            ClassicEditor
                .create( document.querySelector( '#{{ $name }}' ) )
                .catch( error => {
                    console.error( error );
                });
        </script>
    @else
        <script>
            ClassicEditor
                .create( document.querySelector( '#{{ $name }}' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endif
@endpush

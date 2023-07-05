@props(['label', 'name', 'value', 'options'])

<div class="grid grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="col-span-2">
        @foreach( $options as $key=>$option )
            <input 
                type="radio"
                @if( $value==$key ) checked @endif
                @if (isset($name)) name="{{ $name }}" @endif
                @if (isset($name)) id="{{ $name }}" @endif
                value="{{ $key }}"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
            >
            <label for="default-radio-2" class="mx-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option }}</label>        
        @endforeach
        @error('name')
            <span class="text-sm text-red-400">{{ $message }}</span>
        @enderror    
    </div>
</div>

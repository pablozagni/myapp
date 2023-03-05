@props([
    'label',
    'name',
    'value'
])

<div class="grid grid-cols-3 mb-3">
    @if( isset($label) )
    <x-inputs-label>{{ $label }}</x-inputs-label>
    @endif
    <div class="w-full col-span-2">
        <input 
            {{ $attributes->merge(['class'=>'w-full form-control'])}} 
            id="{{ $name }}" 
            name="{{ $name }}"
            type="text"
            @if( isset($value) )
            value="{{ $value }}"
            @endif
            >
        @if ($errors->has($name))
            <div class="mt-2 text-sm text-red-400">{{ $errors->first($name) }}</div>
        @endif
    </div>
</div>

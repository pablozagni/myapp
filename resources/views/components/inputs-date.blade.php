<div class="md:grid sm:grid-cols-1 md:grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="w-full md:col-span-2">
        <input
            type="date"
            {{ $attributes->merge(['class'=>'w-full form-control'])}} 
            @if (isset($name)) id="{{ $name }}"  @endif
            @if (isset($name)) name="{{ $name }}" @endif
            @if (isset($value)) value="{{ $value }}" @endif
            >
        @if ($errors->has($name))
            <div class="mt-2 text-sm text-red-400">{{ $errors->first($name) }}</div>
        @endif
    </div>
</div>

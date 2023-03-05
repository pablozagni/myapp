@props([
    'label',
    'name',
    'options' => [],
    // 'selectedOptions' => []
])
<div class="grid grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="w-full col-span-2">
        <select 
            @if (isset($name)) name="{{ $name }}" @endif
            @if (isset($id)) id="{{ $id }}" @endif
            @if (isset($multiple)) multiple @endif
            {{-- {{ $attributes->merge(['class'=>'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'])}} --}}
            {{ $attributes->merge(['class'=>'w-full form-control'])}}
            >
            
            @foreach ($options as $key => $label)
                <option value="{{ $key }}" 
                {{-- {{ in_array($options[$key], $name) ? 'selected' : '' }} --}}
                >
                    {{ $label }}
                </option>
            @endforeach
        </select>
        @if ($errors->has($name))
            <span class="text-sm text-red-400">{{ $errors->first($name) }}</span>
        @enderror
    </div>
</div>

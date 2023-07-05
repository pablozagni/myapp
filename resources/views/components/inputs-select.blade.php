@props([
    'label',
    'name',
    'value',
    'options' => [],
])

<div class="md:grid sm:grid-cols-1 md:grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="w-full md:col-span-2">
        <select
            @if (isset($name)) name="{{ $name }}" @endif
            @if (isset($id)) id="{{ $id }}" @endif
            @if (isset($multiple)) multiple @endif
            {{ $attributes->merge(['class'=>'w-full form-control'])}}
            >
            @foreach($options as $key=>$sublabel)
                <option {!! ($key===$value) ? 'selected' : '' !!} value="{{ $key }}">{{ $sublabel }}</option>
            @endforeach
        </select>         
        @if ($errors->has($name))
            <span class="text-sm text-red-400">{{ $errors->first($name) }}</span>
        @enderror
    </div>
</div>

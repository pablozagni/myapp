<div class="grid grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="col-span-2">
        @foreach ($options as $option)
        <div>
            <label>
                {!! Form::checkbox($name, $option->id, null, ['class'=>'form-control mr-1']) !!}
                {{ $option->name }}                    
            </label>
        </div>
        @endforeach
        @error('name')
            <span class="text-sm text-red-400">{{ $message }}</span>
        @enderror    
    </div>
</div>

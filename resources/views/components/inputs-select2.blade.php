@props([
    'label',
    'name',
    'value',
    'multiple' => false,
    'options' => [],
])
<div class="md:grid sm:grid-cols-1 md:grid-cols-3 mb-3">
    <x-inputs-label>{{ $label }}</x-inputs-label>
    <div class="w-full md:col-span-2">

        <div
            x-data="{
                @if( $multiple )
                    multiple: true,
                    value: [ @foreach ($value as $val) '{{ $val->id }}', @endforeach ],
                @else
                    multiple: false,
                    value: '{{ $value }}',
                @endif
                options: [
                    @foreach ($options as $key=>$op)
                        { value: {{ $key }}, label: '{{ $op }}' },
                    @endforeach
                ],
                init() {
                    let bootSelect2 = () => {
                        let selections = this.multiple ? this.value : [this.value]
        
                        $(this.$refs.select).select2({
                            multiple: this.multiple,
                            data: this.options.map(i => ({
                                id: i.value,
                                text: i.label,
                                selected: selections.map(i => String(i)).includes(String(i.value)),
                            })),
                        })
                    }
        
                    let refreshSelect2 = () => {
                        $(this.$refs.select).select2('destroy')
                        this.$refs.select.innerHTML = ''
                        bootSelect2()
                    }
        
                    bootSelect2()
        
                    $(this.$refs.select).on('change', () => {
                        let currentSelection = $(this.$refs.select).select2('data')
        
                        this.value = this.multiple
                            ? currentSelection.map(i => i.id)
                            : currentSelection[0].id
                    })
        
                    this.$watch('value', () => refreshSelect2())
                    this.$watch('options', () => refreshSelect2())
                },
            }"        
        >
            <select 
                x-ref="select" 
                {{ $attributes->merge(['class'=>'w-full'])}}
                @if (isset($name)) name="{{ $name }}" @endif
                ></select>

        </div>


        
    </div>
</div>
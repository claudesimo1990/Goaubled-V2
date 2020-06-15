<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        @if($field->name == 'date_depart')
            <input
                id="depart"
                type="text"
                name="from_date"
                class="form-control @error($field->key) is-invalid @enderror"
                autocomplete="{{ $field->autocomplete }}"
                placeholder="{{ $field->placeholder }}"
                wire:model.lazy="{{ $field->key }}">
        @elseif($field->name == 'date_arrive')
            <input
                id="arrivee"
                type="text"
                name="to_date"
                class="form-control @error($field->key) is-invalid @enderror"
                autocomplete="{{ $field->autocomplete }}"
                placeholder="{{ $field->placeholder }}"
                wire:model.lazy="{{ $field->key }}">
        @else
            <input
                id="{{ $field->name }}"
                type="{{ $field->input_type }}"
                class="form-control @error($field->key) is-invalid @enderror"
                autocomplete="{{ $field->autocomplete }}"
                placeholder="{{ $field->placeholder }}"
                wire:model.lazy="{{ $field->key }}">
        @endif

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>

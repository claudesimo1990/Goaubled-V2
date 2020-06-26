<div class="form-group row">
    <label for="{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>
{{'test view'}}
    <div class="col-md">
        <input
            id="{{ $field->name }}"
            type="text"
            class="custom-field-class form-control @error($field->key) is-invalid @enderror"
            wire:model.lazy="{{ $field->key }}">

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>

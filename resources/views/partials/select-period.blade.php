@php

    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);

@endphp

<div @class(["form-group mb-3", $class])>
    <label class="m-2" for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option value="">Sélectionner une période</option>
        @foreach($periods as $period)
            <option @selected(old('period_id', $project->period_id) == $period->id) value="{{ $period->id }}">{{ $period->name }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

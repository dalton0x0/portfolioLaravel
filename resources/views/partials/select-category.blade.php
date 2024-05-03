@php

    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);

@endphp

<div @class(["form-group mb-3", $class])>
    <label class="m-2" for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option value="">Sélectionner une catégorie</option>
        @foreach($categories as $category)
            <option @selected(old('category_id', $project->category_id) == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

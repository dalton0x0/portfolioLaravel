@php

    $class ??= 'col';
    $cover ??= '';
    $title ??= '';
    $description ??= '';
    $path ??= 'index';
    $category ??= '';

@endphp

<div class="{{ $class }}">
    <div class="card shadow rounded-4 h-100">
        <img class="img-fluid p-2 w-100" src="{{ asset('storage/img/' . $cover ) }}" alt="{{ $title }}"/>
        <div class="card-body">
            <h4 class="card-title">{!! $title !!}</h4>
            <p class="card-text">{{ $description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start">
                    <a class="btn btn-primary" href="{{ route('projects.' . $path ) }}">Voir</a>
                </div>
                <small class="text-body-secondary">{{ $category }}</small>
            </div>
        </div>
    </div>
</div>

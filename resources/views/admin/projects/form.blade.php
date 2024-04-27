@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <div class="my-5">
        <div class="container p-4">
            <div class="row justify-content-md-center">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder">
                        <span class="text-gradient d-inline">{{ $project->exists ? 'Modifier : ' . $project->title : 'Créer un projet' }}</span>
                    </h1>
                </div>
                <div class="col-md-7">
                    <form action="{{ route($project->exists ? 'admin.projects.update' : 'admin.projects.store', $project) }}" method="post" id="ProjectContent" enctype="multipart/form-data">
                        @csrf
                        @method($project->exists ? 'put' : 'post')
                        @include('partials.input', ['name' => 'title', 'label' => 'Titre', 'value' => $project->description, 'placeholder' => 'Titre'])
                        @include('partials.input', ['type' => 'textarea', 'name' => 'description', 'label' => 'Description', 'value' => $project->description, 'placeholder' => 'Description'])
                        <div class="row">
                            <div class="col-md-6">
                                @include('partials.upload', ['name' => 'report', 'label' => 'Compte rendu'])
                            </div>
                            <div class="col-md-6">
                                @include('partials.upload', ['name' => 'cover', 'label' => 'Cover'])
                            </div>
                        </div>
                        @include('partials.select', ['name' => 'category_id', 'label' => 'Catégorie'])
                        <div class="mt-4">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary me-2 rounded">
                                <i class="bi-arrow-left-short"></i>
                            </a>
                            @if($project->exists)
                                <button class="btn btn-outline-primary me-2 rounded" type="submit">
                                    <i class="bi-check2-circle"></i>
                                </button>
                            @else
                                <button class="btn btn-outline-success me-2 rounded" type="submit">
                                    <i class="bi-plus-circle"></i>
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

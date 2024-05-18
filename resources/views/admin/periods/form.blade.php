@extends('layouts.admin.base')

@section('title', 'Administration')

@section('content')
    <div class="my-5">
        <div class="container p-4">
            <div class="row justify-content-md-center">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder">
                        <span class="text-gradient d-inline">{{ $period->exists ? 'Modifier : ' . $period->title : 'Créer une période' }}</span>
                    </h1>
                </div>
                <div class="col-md-6">
                    <form action="{{ route($period->exists ? 'admin.periods.update' : 'admin.periods.store', $period) }}" method="post" id="categoryContent" enctype="multipart/form-data">
                        @csrf
                        @method($period->exists ? 'put' : 'post')

                        @if($period->exists)
                            @include('partials.input', ['value' => $period->name,'name' => 'name', 'label' => 'Nom', 'placeholder' => 'Nom'])
                        @else
                            @include('partials.input', ['name' => 'name', 'label' => 'Nom', 'placeholder' => 'Nom'])
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('admin.periods.index') }}" class="btn btn-primary me-2 rounded">
                                <i class="bi-arrow-left-short"></i>
                            </a>
                            @if($period->exists)
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

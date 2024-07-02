@extends('layouts.app.base')

@section('title', 'Projets - Stage')

@section('content')
    <div class="pt-5">
        @foreach($projects as $categoryName => $categoryProjects)
            <section class="album pb-5 bg-body-tertiary">
                <div class="container px-4">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ ($categoryName) }}</span></h1>
                    </div>
                    <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        @foreach($categoryProjects as $projects)
                            <div class="col">
                                @include('partials.card-project')
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection

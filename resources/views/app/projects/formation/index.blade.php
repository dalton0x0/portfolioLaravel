@extends('layouts.app.base')

@section('title', 'Projets - Formation')

@section('content')
    @foreach($periods as $period)
        <section class="album py-5 bg-body-tertiary">
            <div class="container px-4">
                <div class="justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($period->projects as $project)
                        <div class="col">
                            @include('partials.card-project')
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
@endsection

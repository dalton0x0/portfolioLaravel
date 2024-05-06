@extends('layouts.app.base')

@section('title', 'Mes projets')

@section('content')
    <!-- Section Projets BTS -->
    <section class="album py-5 bg-body-tertiary">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets BTS</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="row">
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'system/cover-systeme.png',
                            'title' => 'Système',
                            'path' => 'system.index',
                            'category' => 'Linux'
                        ])
                        @include('partials.card', [
                            'class' => 'col-md-6 mb-3' ,
                            'cover' => 'network/cover-reseau.png',
                            'title' => 'Réseau',
                            'path' => 'network.index',
                            'category' => 'MikroTik'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($periods as $period)
        <section class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $period->name }}</span></h1>
                </div>
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

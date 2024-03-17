@php
    $route = request()->route()->getName()
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">{{ config('app.name') }}</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-primary' => str_contains($route, 'projects')]) href="{{ route('projects') }}">Projets</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-primary' => str_contains($route, 'training')]) href="{{ route('training') }}">Mon parcours</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-primary' => str_contains($route, 'skills')]) href="{{ route('skills') }}">Compétences</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-primary' => str_contains($route, 'news')]) href="{{ route('news') }}">Veille Technologique</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-primary' => str_contains($route, 'about')]) href="{{ route('about') }}">A propos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

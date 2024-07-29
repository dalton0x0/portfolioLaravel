@php
    $route = request()->route()->getName()
@endphp
@if(!str_contains($route, 'login'))
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; {{ config('app.name') }} &middot; {{ date('Y') }}</div></div>
                <div class="col-auto">
                    @if(str_contains($route, 'about'))
                        <a class="small" href="{{ route('contact') }}">Contact</a>
                    @elseif(str_contains($route, 'contact'))
                        <a class="small" href="{{ route('about') }}">À propos</a>
                    @else
                        <a class="small" href="{{ route('about') }}">À propos</a> | <a class="small" href="{{ route('contact') }}">Contact</a>
                    @endif
                </div>
            </div>
        </div>
    </footer>
@endif

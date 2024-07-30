@extends('layouts.app.base')

@section('title', 'A propos')

@section('content')
    @include('partials.about-me')
    <section class="bg-light">
        <div class="container px-4 pb-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center">
                        <h2 class="display-5 fw-bolder mb-4"><span class="text-gradient d-inline">Remerciements</span></h2>
                        <p class="fw-light">
                            Je tiens à remercier la direction et les professeurs de <b>Nuxell Technologies</b>, l'école où tout à commencer pour mon parcours
                            en système et réseau informatique. À l'école <b>ITIC Paris</b> qui m'aide à approfondir mes connaissances et compétences déjà
                            acquises par le passé et à exprimer mon talent au quotidient.
                        </p>
                        <p>
                            Je tiens aussi à exprimer ma profonde gratitude et ma reconnaissance à <b>Adnan RIHAN</b> et à <b>Christ AZIKA</b>, deux grands
                            mentors et layouts sur lesquels je puise tout mon intélligence et mon savoir faire sur tous les domaines. Je vous laisse contempler
                            ces profils de génie et leurs sites magnifiques web qui dépassent de loin le mien.
                        </p>
                        <!-- Mes deux soleils -->
                        <div class="row pb-3">
                            <div class="col-lg-6 p-2">
                                <img class="img-fluid rounded-circle p-2" width="140" height="140" src="{{ asset('assets/img/great/adnan.jpeg') }}" alt="Adnan"/>
                                <h2 class="fw-normal pt-1">Adnan RIHAN</h2>
                                <p>Software Engineer, MikroTik Engineer and Certified Trainer, Crypto guy and Pilot</p>
                                <div class="d-flex justify-content-center fs-2 gap-4 pt-1">
                                    <a class="text-gradient" target="_blank" href="https://adnan.rihan.fr">
                                        @include('partials.icon', ['class' => 'bi-globe'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="mailto:adnan@rihan.fr">
                                        @include('partials.icon', ['class' => 'bi-envelope'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://linkedin.com/in/adnan-rihan-209b1097">
                                        @include('partials.icon', ['class' => 'bi-linkedin'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://https://github.com/Max13">
                                        @include('partials.icon', ['class' => 'bi-github'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://twitter.com/_Max13">
                                        @include('partials.icon', ['class' => 'bi-twitter'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://t.me/AdnanRIHAN">
                                        @include('partials.icon', ['class' => 'bi-telegram'])
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 p-2">
                                <img class="img-fluid rounded-circle p-2" width="140" height="140" src="{{ asset('assets/img/great/christ.jpeg') }}" alt="Christ"/>
                                <h2 class="fw-normal pt-1">Christ AZIKA-EROS</h2>
                                <p>Digital Transformation & Marketing specialist | Certified Google & Social Ads</p>
                                <div class="d-flex justify-content-center fs-2 gap-4 pt-1">
                                    <a class="text-gradient" target="_blank" href="https://christ.azika-eros.org">
                                        @include('partials.icon', ['class' => 'bi-globe'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="mailto:christ@azika-eros.org">
                                        @include('partials.icon', ['class' => 'bi-envelope'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://linkedin.com/in/azika">
                                        @include('partials.icon', ['class' => 'bi-linkedin'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://www.facebook.com/supm4n">
                                        @include('partials.icon', ['class' => 'bi-facebook'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://www.twitter.com/supm4n">
                                        @include('partials.icon', ['class' => 'bi-twitter'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://www.instagram.com/supm4n">
                                        @include('partials.icon', ['class' => 'bi-instagram'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://www.youtube.com/@Supm4n">
                                        @include('partials.icon', ['class' => 'bi-youtube'])
                                    </a>
                                    <a class="text-gradient" target="_blank" href="https://www.tiktok.com/Supm4n">
                                        @include('partials.icon', ['class' => 'bi-tiktok'])
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img class="img-fluid p-2 mb-2" src="{{ asset('assets/img/great/nuxell-technologies.png') }}" width="150" alt="Nuxell Technologies"/>
                            <img class="img-fluid p-2" src="{{ asset('assets/img/great/itic-paris.png') }}" width="200" alt="ITIC Paris"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

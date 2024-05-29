<section class="bg-light">
    <div class="container px-4">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                @include('partials.flash')
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Chéridanh</span></h2>
                    <p class="lead fw-light mb-4">Administrateur Système & Réseau</p>
                    <p class="text-muted">
                        Etudiant en 2<sup>e</sup> année de BTS SIO option SISR (Solutions d'Infrastructures Systèmes et
                        Réseaux) à l'école ITIC Paris,
                        j'ai une passion pour les réseaux, les systèmes informatiques et aussi le developpement
                        d'application web.
                    </p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" target="_blank" href="https://www.snapchat.com/add/ch.dalton?share_id=cuW6mTJ_SSuV2bDhgEZ8SA&locale=fr_FR">
                            @include('partials.icon', ['class' => 'bi-snapchat'])
                        </a>
                        <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/cheridanhtsiela">
                            @include('partials.icon', ['class' => 'bi-linkedin'])
                        </a>
                        <a class="text-gradient" target="_blank" href="https://github.com/cheridanh">
                            @include('partials.icon', ['class' => 'bi-github'])
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

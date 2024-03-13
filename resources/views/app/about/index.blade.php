@extends('layout.app.base')

@section('title', 'A propos')

@section('content')
    <!-- A propos -->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Chéridanh</span></h2>
                        <p class="lead fw-light mb-4">Administrateur Système & Réseau Junior</p>
                        <p class="text-muted">
                            Etudiant en 2e année de BTS SIO option SISR (Solutions d'Infrastructures Systèmes et Réseaux) à l'école ITIC Paris,
                            j'ai une passion pour les réseaux, les systèmes informatiques et aussi le developpement d'application web.
                        </p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/cheridanhtsiela"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-discord"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-5">
            <!-- Formulaire de contact -->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Contact</h1>
                    <p class="lead fw-normal text-muted mb-0">Me laisser un message ?</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nom complet</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un adresse mail est requis</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">L'addresse mail est incorrecte</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis</div>
                            </div>
                            <!-- Flash succès -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Message envoé</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Flash erreur -->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur d'envoie</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Envoyer</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

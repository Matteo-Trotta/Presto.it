<footer style="background-image: url('/img/cart_home.jpg')" class="text-center text-lg-start text-muted bgHomeImage">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center mt-5 justify-content-lg-between p-4 borderfooter ColorThree">
        {{-- Scritta sinistra footer --}}
        <div class="me-5 d-none d-lg-block">
            <span>{{ __('ui.stayConnected') }}</span>
        </div>

        {{-- icone social --}}
        <div>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset text-decoration-none">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </section>

    <!-- Section: Links  -->
    <section class="ColorThree">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 justify-content-between">
                <!-- Grid column -->
                <div class="col-6 col-xl-2 col-md-4 col-lg-3 me-auto mb-4 text-center">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Byte-Buster
                    </h6>
                    <p>
                        {{ __('ui.webDevelopmentTeam') }}
                    </p>
                    <img class="img-fluid" src="/img/logoblu-trasparente.png" alt="logo presto blu">

                    <div class="my-3 text-center ">
                        @auth
                            {{ __('ui.becomeRevisor') }}
                            <a class="btn btn-outline" href="{{ route('become.revisor') }}">
                                <span class="me-2 fs-6"><i class="fa-solid fa-plus"></i></span>{{ __('ui.sendRequest') }}
                            </a>
                        @endauth
                    </div>
                </div>
                <!-- Grid column -->

                <div class="col-3 d-none d-lg-block mx-auto mb-4">
                    <!-- Empty column for spacing -->
                </div>

                <!-- Team column -->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 mb-md-0 mb-4 p-0 ColorThree ">
                    <h6 class="text-uppercase fw-bold mb-4 text-center">{{ __('ui.team') }}</h6>
                    <div class="d-flex p-0 align-items-center mb-3">
                        <div class="col-6 mx-auto">
                            <img src="/img/profilePasquale.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6 me-auto">Pakòs</p>
                    </div>
                    <div class="d-flex p-0 align-items-center mb-3">
                        <div class="col-6 mx-auto">
                            <img src="/img/profileVeronica.jpeg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6   me-auto">Veronica</p>
                    </div>
                    <div class="d-flex p-0 align-items-center mb-3">
                        <div class="col-6 mx-auto">
                            <img src="/img/profileGiuliano.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6  me-auto">Giuliano</p>
                    </div>
                    <div class="d-flex p-0 align-items-center mb-3">
                        <div class="col-6 mx-auto">
                            <img src="/img/profileMatteo.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6  me-auto">Matteo</p>
                    </div>
                    <div class="d-flex  p-0 align-items-center mb-3">
                        <div class="col-6 mx-auto">
                            <img src="/img/profile-mirko.jpg" class="rounded-circle borderImgProfile"
                                alt="foto profilo">
                        </div>
                        <p class=" col-6  me-auto">Mirko</p>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold"
            href="https://s2.pictoa.com/media/galleries/300/170/3001706021c5f7c8431/39046876021c5f9b9890.gif">Byte-Busters</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

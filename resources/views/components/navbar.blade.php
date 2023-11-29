{{-- pulsante e home --}}
<nav class="container-fluid w-100 pt-0 mt-0 navbar z-3" role="navigation">

    <div class="row text-center w-100 align-items-center g-0">
        <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto contenitore">
            <div class="d-flex justify-content-around border-top border-bottom border-dark linea">
                <div class="customLink"><a class="d-inline-block p-3" href="{{ Route('home') }}">Home</a></div>
                <div class="customLink"><a class="d-inline-block p-3" href="#">Product</a></div>
                <div class="customLink"><a class="d-inline-block p-3" href="#">Pricing</a></div>
            </div>
        </div>
        {{-- sezione centrale --}}
        <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                 {{-- img gestita nel leyaut --}}
        </div>
        <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto contenitore2">
            <div class="d-flex justify-content-around border-top border-bottom border-dark linea">
                <div class="customLink"><a class="d-inline-block p-3" href="#">Company</a></div>
                <div class="customLink"><a class="d-inline-block p-3" href="#">Services</a></div>
                <!-- Aggiunto il div con la classe 'd-flex' per posizionare l'immagine e il testo sulla stessa riga -->
                <li class="customLink d-flex align-items-center">
                    <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->
                    <div class="round img-fluid"><img class="user_image" src="/Media/user.png" alt=""></div>
                    <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <a class="d-inline-block p-3 dropdown-toggle navbarColor" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <b class="navbarColor">Benvenuto Utente</b>

                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bold " href="{{ route('login') }}">Login</a>
                            </li>
                            <li><a class="dropdown-item fw-bold"
                                    href="{{ Route('register') }}">Registrati</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                        </ul>
                    </li>
                </li>
            </ul>
        </div>


    </div>
</nav>

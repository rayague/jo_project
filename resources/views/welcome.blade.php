<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le Digitalemaster</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        {{-- Styles --}}

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/features.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    </head>
    <body class="antialiased">

      <img src="{{ asset('assets/images/bars-solid.svg') }}" class="img-bars" alt="">

      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 16 16" fill="white">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16" fill="white">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </symbol>
        <symbol id="linkedin" viewBox="0 0 24 24" fill="white">
          <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
        </symbol>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" fill="black" style="display: none;">
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </symbol>
        <symbol id="book" viewBox="0 0 16 16">
          <path d="M2 0h12c.55 0 1 .45 1 1v14c0 .55-.45 1-1 1H2c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1zm13 2H3c-.55 0-1 .45-1 1v10h2V4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v9h2V3a1 1 0 0 1 1-1zm-8 11h4v1H7v-1z"/>
        </symbol>

      </svg>

      <div class="loader">
        <div class="letters">
          <canvas id="canvas"></canvas>
        </div>
      </div>
        <div id="search-bar-container" style="display:none;">
            <input type="text" id="search-input" placeholder="Tapez pour rechercher...">
            <button onclick="submitSearch()">Rechercher</button>
        </div>
          <video autoplay loop muted id="background-video">
            <source src="{{ asset('assets/videos/vid_background.mp4') }}" type="video/mp4">
          </video>

        <header>
            <a href="/"><span class="show-logo"> Ledigitalmaster </span></a>
            <div class="animated-text">Bienvenu sur <span class="animated-span">Ledigitalmaster</span></div>
            <div class="menu-dropdown" id="menuDropdown" >
              <nav class="fixed" id="nav">
                  <a href="/"><span class="logo"> Ledigitalmaster </span></a>
                  <ul class="ul">
                    {{-- <a href="https://wa.me/numérodetéléphone/?text=Bonjour%20!%20Je%20suis%20intéressé%20par%20vos%20services.%20Veuillez%20voir%20l'image%20ci-jointe:%20https://lien-vers-votre-image" target="_blank">Envoyer un message WhatsApp avec une image</a> --}}
                      <a href="{{ route('devisGratuis') }}" class="a start"><li class="li">Devis gratuit</li></a>
                      <a href="{{ route('nousContacter') }}" class="a"><li class="li">Nous contacter</li></a>
                    <div class="authSection">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="login a">Se connecter</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="register a">S'inscrire</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                    <i class="fas fa-search fa-lg fa-2x mx-3" style="color: orange; display: block; margin: auto; cursor: pointer;" onclick="showSearchBar()"></i>
                  </ul>
              </nav>

              <div class="category">
                <p><a href="{{ route('conception') }}" class="a">Conception de site Web</a></p>
                <p><a href="{{ route('referencement') }}" class="a">Référencement SEO</a></p>
                <p><a href="{{ route('optimisation') }}" class="a">Marketing Digital</a></p>
                <p><a href="{{ route('nosFormations') }}" class="a">Nos formations</a></p>
              </div>
            </div>
            <img class="menu-bars" onclick="toggleMenu()" src="{{ asset('assets/images/bars-solid.svg') }}" alt="">
          </header>

        <section class="bg-light">
          <section class="container-section bg-light mb-5">

            <div class="container marketing pt-5">
                <hr class="featurette-divider my-5">

                  <h2 class="text-center" style="font-size: 64px; letter-spacing: -1px;">Nos Services</h2>

                <hr class="featurette-divider my-5">

                  <div class="row featurette">
                    <div class="col-md-6">
                      <h2 class="featurette-heading fw-normal lh-1">Création de sites web/blog sur mesure <br><br> <span class="text-body-secondary">Le Digital Master vous offre une présence en ligne qui se démarque !</span></h2>
                      <p class="lead">La création de votre site web est une étape cruciale pour établir une présence significative sur Internet. Chez Le Digital Master, nous comprenons l'importance d'avoir un site web qui va au-delà d'une simple vitrine en ligne, mais qui véhicule l'essence même de votre entreprise.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('assets/images/service1.jpg') }}" class="shadow rounded-3 img-fluid" alt="">
                    </div>
                  </div>

                  <hr class="featurette-divider my-5">

                  <div class="row featurette">
                    <div class="col-md-6 order-md-2">
                      <h2 class="featurette-heading fw-normal lh-1">Référencement SEO <br><br><span class="text-body-secondary">Optimisez votre visibilité en ligne avec notre service de Référencement SEO !</span></h2>
                      <p class="lead">Le Digital Master est votre partenaire de confiance pour propulser votre entreprise vers les sommets des résultats de recherche. Notre service de référencement SEO (Search Engine Optimization) est conçu pour maximiser la visibilité de votre site web et augmenter votre classement sur les moteurs de recherche.</p>
                    </div>
                    <div class="col-md-4 order-md-1">
                      <img src="{{ asset('assets/images/service2.jpg') }}" class="shadow rounded-3 img-fluid" alt="">
                    </div>
                  </div>

                  <hr class="featurette-divider my-5">

                  <div class="row featurette my-5">
                    <div class="col-md-6">
                      <h2 class="featurette-heading fw-normal lh-1">Marketing Digital <br><br><span class="text-body-secondary">Transformez votre présence en ligne avec notre service de Marketing Digital !</span></h2>
                      <p class="lead">Le Digital Master est votre partenaire stratégique pour exploiter tout le potentiel du marketing digital. Notre service de Marketing Digital est conçu pour vous aider à atteindre vos objectifs commerciaux, renforcer votre notoriété de marque et stimuler la croissance de votre entreprise.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('assets/images/service3.jpg') }}"  class="shadow rounded-3 img-fluid" alt="">
                      </div>
                  </div>

          </section>

          <section class="my-5">
            <div class="container py-4">
              <div class="pb-3 mb-5 border-top">
              </div>

              <div class="row align-items-md-stretch">
                <div class="col-md-12">
                  <div class="h-100 p-5 text-bg-warning rounded-3">
                    <p><span class="fs-2">Démarquez-vous en Ligne avec Votre Site Web Unique</span> <br>

                      Votre présence en ligne est la vitrine numérique de votre entreprise. Chez LeDigitalMaster, nous transformons des idées en expériences en ligne exceptionnelles. Imaginez un site web qui reflète parfaitement votre identité, attire votre public cible et génère des résultats tangibles.</p>
                    <a class="btn btn-outline-dark" href="{{ route('nousContacter') }}" type="button">Commander un site web</a>
                  </div>
                </div>
              </div>

            </div>
          </section>

                    <section id="slider">
                        <input type="radio" name="slider" id="s1"/>
                        <input type="radio" name="slider" id="s2"/>
                        <input type="radio" name="slider" id="s3" checked/>
                        <input type="radio" name="slider" id="s4"/>
                        <input type="radio" name="slider" id="s5"/>
                        <label for="s1" id="slide1">
                            <img src="{{ asset('assets/images/websitepicture50.jpg') }}" alt="image">
                        </label>
                        <label for="s2" id="slide2">
                            <img src="{{ asset('assets/images/websitepicture49.png') }}" alt="image">
                        </label>
                        <label for="s3" id="slide3">
                            <img src="{{ asset('assets/images/websitepicture48.jpg') }}" alt="image">
                        </label>
                        <label for="s4" id="slide4">
                            <img src="{{ asset('assets/images/websitepicture47.webp') }}" alt="image">
                        </label>
                        <label for="s5" id="slide5">
                            <img src="{{ asset('assets/images/websitepicture46.webp') }}" alt="image">
                        </label>
                    </section>

                    <hr class="container featurette mt-5 bg-light">
                    <h3 class="text-center m-5"> Nos Formations</h3>
                  <hr class=" container featurette my-5">

                    <section class="my-5">
                      <div class="container px-4 py-5">

                        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 p-5">
                          <div class="d-flex flex-column align-items-start gap-2">
                            <h3 class="fw-bold">Nous offrons des formations riches et intéressantes pour vous.</h3>
                            <p class="text-muted">"Explorez de nouvelles opportunités et élargissez vos compétences avec nos formations exclusives conçues pour le grand public. Que vous aspiriez à maîtriser le marketing digital, à développer des compétences en rédaction web, à perfectionner votre art oratoire ou à créer votre propre boutique en ligne, nos cours interactifs vous guideront à chaque étape. Embarquez dans une aventure d'apprentissage passionnante et investissez dans votre avenir dès aujourd'hui.</p>
                            <a href="{{ route('nosFormations') }}" class="btn btn-warning btn-lg">Voir les formations</a>
                          </div>
                          <div class="row row-cols-1 row-cols-sm-2 g-4">
                            <div class="d-flex flex-column gap-2">
                              <div
                                class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                  <use xlink:href="#book" />
                                </svg>
                              </div>
                              <h4 class="fw-semibold mb-0">Formation en Rédaction Web</h4>
                              <p class="text-muted">Découvrez l'art de la rédaction web en 30 minutes! Maîtrisez les bases de la rédaction persuasive et SEO pour créer un contenu impactant. Boostez votre présence en ligne dès aujourd'hui!</p>
                            </div>

                            <div class="d-flex flex-column gap-2">
                              <div
                                class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-4 rounded-3">
                                <svg class="bi" width="1em" height="1em">
                                  <use xlink:href="#book" />
                                </svg>
                              </div>
                              <h4 class="fw-semibold mb-0">Formation en Marketing Digital</h4>
                              <p class="text-muted">Explorez le marketing digital en 30 minutes ! Découvrez les principes fondamentaux, des stratégies éprouvées et des astuces pour propulser votre présence en ligne. Transformez vos idées en résultats concrets dès maintenant.</p>
                            </div>

                          </div>
                        </div>
                      </div>
                    </section>

          <section class="bg-light">
            <hr class="container featurette mt-5 bg-light">
              <h3 class="text-center m-5"> Avis et témoignages</h3>
            <hr class=" container featurette my-5">

            <div class="container wrapper" style="margin-bottom: 90px; position: relative;">

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                <i id="left" class="fa-solid fa-angle-left carousel-control"></i>

                <ul class="carousel container">
                    {{-- <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>Martin Z.</h2>
                        <span>LeDigitalMaster a transformé ma vision en une réalité en ligne éblouissante ! </span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>Josias W.</h2>
                        <span>Innover dans le digital peut être intimidant.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>Sylvie Y.</h2>
                        <span>LeDigitalMaster a été bien plus qu'une équipe de conception de sites web.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>James M.</h2>
                        <span>Mon entreprise a connu une transformation digitale exceptionnelle grâce à LeDigitalMaster. </span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>Krystina Z.</h2>
                        <span>LeDigitalMaster a compris ma vision dès le départ et a créé un site web qui va au-delà de mes rêves les plus fous.</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('assets/images/svg2.svg') }}" alt="img" draggable="false"></div>
                        <h2>David F.</h2>
                        <span>Une équipe passionnée et dédiée qui a su faire de notre site web bien plus qu'une simple plateforme en ligne.</span>
                    </li> --}}

                    @foreach($avis as $avis)
                        <div class="card container">
                            <div class="img"><img src="{{ asset('uploads/photos/' . $avis->avis_photo) }}" class="img-fluid" alt="img"></div>
                            <h2 class="container">{{ $avis->nom }} {{ $avis->prenom }}</h2>
                            <div class="container">{{ $avis->commentaires }}</div>
                        </div>
                    @endforeach
                </ul>



                <i id="right" class="fa-solid fa-angle-right carousel-control"></i>

            </div>
            <div class="bg-secondary p-4 mt-5 rounded-4 h-100 collapse" style="margin-inline: auto; height: 500px; width: 600px;"  id="temoignages">
                <form action="{{ route('submit_avis') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label text-light">Votre Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="titleHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="prenom" class="form-label text-light">Votre prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="titleHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="avis_photo" class="form-label text-light">Votre photo</label>
                        <input type="file" class="form-control" id="avis_photo" name="avis_photo" aria-describedby="titleHelp" required>
                    </div>

                    <div class="mb-3">
                        <label for="commentaires" class="form-label text-light">Votre commentaire</label>
                        <textarea class="form-control" id="commentaires" name="commentaires" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning mb-3 py-3 px-4 w-100" >Poster votre avis</button>
                </form>
            </div>


        </div>
        <button type="button" class="btn btn-primary btn-lg d-block mx-auto mt-5 mb-5" data-bs-toggle="collapse" data-bs-target="#temoignages" aria-expanded="true">Ajouter votre avis</button>




            <br><br>
          </section>
          <footer class="px-3 fixed-bottom bottom-0 d-flex flex-wrap justify-content-between align-items-center py-3 mt-5">
            <p class="col-md-4 mb-0 text-light">&copy; copyright <span class="text-warning">Le Digital Master.</span> Tous droits réservés</p>

            <ul class="nav col-md-4 justify-content-center ">
              <li class="nav-item"><a href="{{ route('quiSommesNous') }}" class="nav-link px-2">Qui sommes-nous</a></li>
              <li class="nav-item"><a href="{{ route('supports') }}" class="nav-link px-2">Supports</a></li>
              <li class="nav-item"><a href="{{ route('politiqueConfidentialite') }}" class="nav-link px-2">Politique de confidentialité</a></li>
              <li class="nav-item"><a href="{{ route('nousContacter') }}" class="nav-link px-2">Nous contacter</a></li>
              </ul>


            <span class="col-md-4 d-flex align-items-end justify-content-end mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <a href=""><svg class="bi me-2" ><use xlink:href="#facebook"/></svg></a>
              <a href=""><svg class="bi me-2" ><use xlink:href="#instagram"/></svg></a>
              <a href=""><svg class="bi me-2" ><use xlink:href="#linkedin"/></svg></a>
            </span>

                    <button id="back-to-top-btn" class="btn btn-primary btn-sm text-light p-3" onclick="scrollToTop()">
                      &uarr;
                  </button>
          </footer>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/loader.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
          function toggleMenu() {
            var menuDropdown = document.getElementById('menuDropdown');
            menuDropdown.style.display = menuDropdown.style.display === 'block' ? 'none' : 'block';
          }

          // Fermer la boîte en cliquant en dehors d'elle
          window.onclick = function(event) {
  var menuDropdown = document.getElementById('menuDropdown');
  var menuBars = document.querySelector('.menu-bars');

  // Vérifier la largeur de l'écran
  if (window.innerWidth <= 980) {
    // Vérifier si la boîte du menu est ouverte et que le clic est en dehors de celle-ci
    if (menuDropdown.style.display === 'block' && !menuDropdown.contains(event.target)) {
      menuDropdown.style.display = 'block';
    }
  }
          };
      </script>

    </body>
</html>

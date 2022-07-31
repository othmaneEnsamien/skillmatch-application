<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillMatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Slab:wght@300;400&family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
        integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    @livewireStyles
</head>

<body>

    <header>
        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <img src="../../assets/sofrecom-logo.png" style="width: 15%;">
            </div>
            <ul class="links">
                <li><a href="{{ route('homepage') }}">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">A propos</a></li>

                <li><a href="#">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->type === 'ADM')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My account
                                    {{ Auth::user()->nom }}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('competenceuser') }}">Infos Users</a></li>
                                    <li><a href="{{ route('projetaffecter') }}">Projet Users</a></li>
                                    <li><a href="{{ route('admin.competences') }}">Gestion Competences</a></li>
                                    <li><a href="{{ route('admin.projects') }}">Gestion Projets</a></li>
                                    <li><a href="{{ route('adminprojetcompetence') }}">Gestion Projet Competence</a></li>
                                    <li><a href="{{ route('admin.form-search-employee') }}">Affectation des competences aux
                                            projets</a></li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="padding: 12px">
                                            @csrf
                                    <li>
                                        <a style="color: rgb(63, 63, 63)" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                            Out</a>
                                    </li>
                                    </form>
                            </li>

                </ul>
                </li>
            @else
                @if (Auth::user()->etat == 'valider')
                    <li>
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Employé
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('user.form-competences') }}">competences
                                    maitriser</a>
                                <a class="dropdown-item" href="{{ route('competence.user') }}">Mes compétences</a>
                                <a class="dropdown-item" href="{{ route('projet.user') }}">Mes projets</a>
                            </div>
                        </div>
                    </li>
                    <li>
                    <li>
                        <a href="#">Bonjour,
                            {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</a>
                    </li>
                @endif
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding: 12px">
                        @csrf
                <li>
                    <a style="color: rgb(71, 71, 71)" href="{{ route('logout') }}" class="button-2" role="button"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                </li>
                </form>
                </li>

                </form>



                </li>



                @endif
            @else
                {{-- <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Se connecter</a></li>
    <li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">S'inscrire</a></li> --}}
                <li><a href="{{ route('login') }} " style="color: white" class="button-1" role="button"
                        style="font-size:14px ;font-family:Roboto Slab">Se
                        connecter</a></li>
                <li><a href="{{ route('register') }}" style="color: white" class="button-2" role="button"
                        style="font-size:14px ;font-family:Roboto Slab">S'inscrire</a></li>

                @endif

                @endif


                </ul>
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>



        </header>

        {{ $slot }}

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <img src="../../assets/sofrecom-logo.png" style="width: 30%;">
                        <br>
                        <ul>
                            <li><a href="#">À propos de nous</a></li>
                            <li><a href="#">Notre entreprise</a></li>
                            <li><a href="#">Nos bureaux</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Nos expertises</h4>

                        <ul>
                            <li><a href="#">Stratégie & Marketing</a></li>
                            <li><a href="#">Réseaux & SI</a></li>
                            <li><a href="#">Développement & Intégration de Services</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Secteurs d'activités</h4>
                        <ul>
                            <li><a href="#"> Opérateur Télécoms</a></li>
                            <li><a href="#">Gouvernements et institutions publiques</a></li>

                        </ul>

                    </div>
                    <div class="footer-col">
                        <h4>Suivez-nous</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa-brands fa-facebook-f" style="color: #fff !important;"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram" style="color: #fff !important;"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-twitter"
                                    style="color: #fff !important;"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin" style="color: #fff !important;"></i></a>

                        </div>
                    </div>
        </footer>


        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        @stack('scripts')
    </body>

    </html>

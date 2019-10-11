<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style.css') ?>">
        <title>Espace membre - CityGuides</title>
    </head>

    <body>
        <header>
            <div class="fond-noir">
                <div class="close">
                    <p><a href="#search">x</a></p>
                </div>
                <nav>
                    <div class="entete hamburger">
                        <i class="material-icons menuHamb">menu</i>
                        <ul class="menuNav">
                            <li>Accueil</li>
                            <li>Mon espace</li>
                            <li></li>
                            <li>Contact</li>
                        </ul>
                        <h3>CityGuides</h3>
                    </div>
                </nav>
                <nav>
                    <div class="entete desktop">
                        <ul>
                            <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                            <li><a href="<?php echo url('/espace-membre') ?>">Mon espace</a></li>
                            <li><a href="<?php echo url('/') ?>">
                                    <h3>CityGuides</h3>
                                </a></li>
                            <li><a href="#">Un autre menu</a></li>
                            <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="titres">
                    <h1>City Guides</h1>
                    <h2>GUIDE AND VISIT !</h2>
                </div>

                <div class="inscription">
                    <button><a href="#">INSCRIPTION</a></button>
                </div>

                <div class="login">
                    <h3><b>Déjà Inscrit.e ?</b></h3>
                    <button><a href="<?php echo url('/espace-membre') ?>">Connexion</a></button>
                </div>

                <div class="fleche">
                    <a href="#main"><i class="material-icons md-36">arrow_downward</i></a>
                </div>
            </div>
        </header>
        <main>

        </main>
        <footer>
            <ul>
                <li>
                    <h3>CityGuides</h3>
                </li>
            </ul>
            <ul>
                <li>Mentions légales</li>
                <li>&copy;CityGuides 2019, tous droits réservés</li>
            </ul>
        </footer>

        <div id="toTop">
            <a class="top" href="#"><i class="material-icons md-36 upwards">arrow_upward</i></a>
        </div>
        </div>

        <script src="<?php echo url('/assets/js/main.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </body>

</html>

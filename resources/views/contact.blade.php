<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="assets/img/logo2.png" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-contact.css') ?>">
        <title>Contact - CityGuides</title>
    </head>

    <body>
        <div id="app2">
            <header>
                <nav>
                    <div class="entete hamburger">
                        <i class="material-icons menuHamb">menu</i>
                        <ul class="menuNav">
                            <i class="material-icons md-18 arrow-back">arrow_back</i>
                            <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                            <li><a href="<?php echo url('/espace-membre') ?>">Mon espace</a></li>
                            <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                            <li><a href="<?php echo url('/register') ?>">Inscription</a></li>
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
                            <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                            <li><a href="<?php echo url('/register') ?>">Inscription</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            <main id="main">
                <section class="contact">
                    <h3>Formulaire de contact</h3>
                    <form @submit.prevent="envoyerFormAjax" method="POST" action="contact/store" enctype="multipart/form-data" id="contact-form">
                        <label>
                            <span>Nom</span>
                            <input type="text" name="nom" required placeholder="entrez votre nom" autofocus>
                        </label>
                        <label>
                            <span>Prénom</span>
                            <input type="text" name="prenom" required placeholder="entrez votre prénom">
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required placeholder="entrez votre email">
                        </label>

                        <label>
                            <span>Message</span>
                            <textarea name="message" cols="10" rows="5" required placeholder="entrez votre message"></textarea>
                        </label>

                        <button type="submit">Envoyer</button>

                        <div class="confirmation">
                            @{{ confirmation }}
                            @{{ erreur }}
                        </div>
                        @csrf
                    </form>
                </section>
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

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="<?php echo url('/assets/js/vue.js') ?>"></script>
        <script src="<?php echo url('/assets/js/main.js') ?>"></script>
    </body>

</html>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="assets/img/logo2.png" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-accueil.css') ?>">
        <title>Accueil - CityGuides</title>
    </head>

    <body>
        <div id="app1">
            <header>
                <div class="fond-noir">

                    <div class="close">
                        <p><a href="#search">x</a></p>
                    </div>
                    <nav>
                        <div class="entete hamburger">
                            <i class="material-icons menuHamb">menu</i>
                            <ul class="menuNav">
                                <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                                <li><a href="<?php echo url('/espace-membre') ?>">Mon espace</a></li>
                                <li></li>
                                <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
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

                    <div class="flexsearch">
                        <form action="" id="search-form">
                            <label>
                                <span>Où ?</span>
                                <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                                <input type="text" name="nom" required placeholder="entrez une localité" autofocus>
                            </label>

                            <label>
                                <span>Du</span>
                                <input type="date" name="date" required placeholder="Quand partez-vous?">
                            </label>
                            <label>
                                <span>Au</span>
                                <input type="date" name="date" required placeholder="Quand partez-vous?">
                            </label>

                            <!-- message confirmation vueJS-->
                            <button type="submit">C'est parti !</button>
                        </form>

                        <div class="flextitres">
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
                        </div>
                    </div>
                    <div class="fleche">
                        <a href="#main"><i class="material-icons md-36">arrow_downward</i></a>
                    </div>
                </div>
            </header>

            <main id="main">

                <!--<section class="recherche" id="search">
                    <h3>Où ?</h3>
                    <div class="search" >
                        <label><input type="text"></label>
                        <a href="#"><i class="material-icons">search</i></a>
                    </div>
                    <h3>Quand ?</h3>
                    <div class="search" id="search">
                        <label><input type="date"></label>
                        <a href="#"><i class="material-icons">search</i></a>
                    </div>

                </section>-->

                <section class="annonces" id="annonces">
                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>
                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>

                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button><a href="#">Go !</a></button>
                        </div>
                    </div>
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

        <script src="<?php echo url('/assets/js/main.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </body>

</html>

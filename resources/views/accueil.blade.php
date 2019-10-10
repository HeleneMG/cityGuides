<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style.css') ?>">
        <title>Accueil - CityGuides</title>
    </head>

    <body>
        <div id="app">
            <header>
                <div class="fond-noir">
                    <div class="close">
                        <p><a href="#annonces">x</a></p>
                    </div>
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
                        <a href="#nav"><i class="material-icons md-36">arrow_downward</i></a>
                    </div>
                </div>
            </header>
            <main>
                <div class="nav" id="nav">
                    <div class="entete" >
                        <i class="material-icons menuHamb">menu</i>
                        <ul class="menuNav">
                            <li>Accueil</li>
                            <li>Mon espace</li>
                            <li>Contact</li>
                        </ul>
                        <h3>CityGuides</h3>
                    </div>

                    <div class="search">
                        <label><input type="text"></label>
                        <a href="#"><i class="material-icons">search</i></a>
                    </div>
                </div>

                <section class="annonces" id="annonces">
                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>Visite du quartier du Panier</h3>
                            <p>Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius.</p>
                        </div>
                        <div class="reserver">
                            <h4>Samedi 22 mai à 14h</h4>
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
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
                            <button>Go !</button>
                        </div>
                    </div>
                </section>
            </main>

            <footer>
                <p>tous droits réservés 2019</p>
            </footer>

            <div id="toTop">
                <a class="top" href="#"><i class="material-icons md-36 upwards">arrow_upward</i></a>
            </div>
        </div>

        <script src="<?php echo url('/assets/js/main.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </body>

</html>

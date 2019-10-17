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
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-membre.css') ?>">
        <title>Espace Membre - CityGuides</title>
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
                            <li><a href="<?php echo url('/espace-annonces') ?>">Annonces</a></li>
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
            </header>

            <main id="main">
                <section class="membre">
                    <h3>Mes informations</h3>
                    <form id="membre-form" action="/store" method="POST">
                        <label>
                            <span>Nom</span>
                            <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                            <input type="text" name="" required placeholder="" autofocus>
                        </label>
                        <label>
                            <span>PrÈnom</span>
                            <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                            <input type="text" name="" required placeholder="">
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="" required placeholder="">
                        </label>

                        <label>
                            <span>Date de naissance</span>
                            <input type="date" name="dateNaissance">
                        </label>

                        <div class="radio">
                            <span>Sexe : </span>
                            <label>
                                <span>H</span>
                                <input type="radio" name="genre" id="madame" value="madame">
                            </label>
                            <label>
                                <span>F</span>
                                <input type="radio" name="genre" id="monsieur" value="monsieur">
                            </label>
                        </div>

                        <label>
                            <span>Adresse</span>
                            <input type="text" name="" required placeholder="">
                        </label>

                        <label>
                            <span>Code postal</span>
                            <input type="text" name="" required placeholder="">
                        </label>

                        <label>
                            <span>Ville</span>
                            <input type="text" name="" required placeholder="">
                        </label>

                        <label>
                            <span>Pays</span>
                            <input type="text" name="" required placeholder="">
                        </label>

                        <label>
                            <span>Ma minibio</span>
                            <textarea name="" cols="10" rows="5" required placeholder=""></textarea>
                        </label>

                        <div class="radio">
                            <span>Je veux guider : </span>
                            <label>
                                <span>Oui</span>
                                <input type="radio" name="guider" id="oui" value="oui">
                            </label>

                            <label>
                                <span>Non</span>
                                <input type="radio" name="guider" id="non" value="non">
                            </label>
                        </div>
                        
                        <div id="radio-ville">
                            <span>Je connais la ville : </span>
                            <div class="radio ville">
                            <label>
                                <span>Comme ma poche</span>
                                <input type="radio" name="connaissanceVille" id="cinq" value="cinq">                               
                            </label>
                            <label>
                                <span>TrËs bien</span>
                                <input type="radio" name="connaissanceVille" id="quatre" value="quatre">                                
                            </label>
                            <label>
                                <span>Bien</span>
                                <input type="radio" name="connaissanceVille" id="trois" value="trois">                               
                            </label>
                            <label class="col2">
                                <span>Un peu</span>
                                <input type="radio" name="connaissanceVille" id="deux" value="deux">                               
                            </label>
                            <label class="col2">
                                <span>Pas du tout</span>
                                <input type="radio" name="connaissanceVille" id="un" value="un">                               
                            </label>
                            </div>
                        </div>

                    </form>

                    <h3>Mes annonces</h3>
                </section>
            </main>

            <footer>
                <ul>
                    <li>
                        <h3>CityGuides</h3>
                    </li>
                </ul>
                <ul>
                    <li>Mentions l√©gales</li>
                    <li>&copy;CityGuides 2019, tous droits r√©serv√©s</li>
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

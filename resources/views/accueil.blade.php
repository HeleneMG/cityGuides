<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
        <link rel="icon" type="image/png" href="assets/img/logo2.png" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-accueil.css') ?>">
        <title>Accueil - CityGuides</title>
    </head>

    <body>
        <div id="app1">
            <header>
                <div class="fond-noir">

                    <div class="close">
                        <p><a href="#search-form.mobile">x</a></p>
                    </div>


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

                    <div class="flexsearch">
                        <div class="bootstrap-iso">
                            <form action="" id="search-form" class="desktop" method="POST">
                                <label>
                                    <span>Où ?</span>
                                    <input type="text" name="ville" placeholder="entrez une localité" autofocus>
                                </label>

                                <div class="input-group input-daterange">
                                    <div class="input-group-addon">De</div>
                                    <input type="text" class="form-control" autocomplete="off">
                                    <div class="input-group-addon">à</div>
                                    <input type="text" class="form-control" autocomplete="off">
                                </div>

                                <button name="submit" type="submit">C'est parti !</button>
                                @csrf
                            </form>
                        </div>

                        <div class="flextitres">
                            <div class="titres">
                                <h1>City Guides</h1>
                                <h2>GUIDE AND VISIT !</h2>
                            </div>

                            <div class="inscription">
                                <button><a href="<?php echo url('/register') ?>">INSCRIPTION</a></button>
                            </div>

                            <div class="login">
                                <h3><b>Déjà Inscrit.e ?</b></h3>
                                <button><a href="<?php echo url('/login') ?>">Connexion</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="fleche">
                        <a href="#main"><i class="material-icons md-36">arrow_downward</i></a>
                    </div>
                </div>
            </header>

            <main id="main">

                <section class="recherche">
                    <form action="" id="search-form" class="mobile">
                        <label>
                            <span>Où ?</span>
                            <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                            <input type="text" name="ville" placeholder="entrez une localité">
                        </label>

                        <div class="input-group input-daterange">
                            <input type="text" class="form-control" autocomplete="off">
                            <div class="input-group-addon">to</div>
                            <input type="text" class="form-control" autocomplete="off">
                        </div>

                        <!-- message confirmation vueJS-->
                        <button type="submit">C'est parti !</button>
                    </form>
                </section>

                <section class="annonces" id="annonces">

<?php
$tabAnnonce = \App\Annonce::latest("updated_at")->get();

foreach($tabAnnonce as $annonce)
{
    echo
<<<CODEHTML
<div class="carte">
    <img src="{$annonce->image}" alt="{$annonce->image}">
    <div class="contenu">
        <h3>{$annonce->titre}</h3>
        <p>{$annonce->contenu}</p>
        <h5>{$annonce->id}</h5>
    </div>
    <div class="reserver">
        <h4>{$annonce->date}</h4>
        <h5>{$annonce->heure}</h5>
        <button><a href="#">Go !</a></button>
    </div>
</div>
CODEHTML;
}
?>
                    <div class="carte">
                        <img src="assets/img/lepanier.jpg" alt="le panier">
                        <div class="contenu">
                            <h3>{$annonce->titre}</h3>
                            <p>{$annonce->contenu}</p>
                            <h5>{$annonce->id}</h5>
                        </div>
                        <div class="reserver">
                            <h4>{$annonce->date}</h4>
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

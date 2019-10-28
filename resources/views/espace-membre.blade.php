<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                            <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                            <li><a href="<?php echo url('/register') ?>">Inscription</a></li>
                            <li><a href="<?php echo url('/deconnexion') ?>">D�connexion</a></li>

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
                            <li><a href="<?php echo url('/deconnexion') ?>">Déconnexion</a></li>

                        </ul>
                    </div>
                </nav>
            </header>

            <main id="main">
                <div class="flex-membre">
                    <section class="membre">
                        <h3>Mes informations</h3>
                        <form id="membre-form" action="/store" method="POST">
                            <label>
                                <span>Nom</span>
                                <input type="text" name="" required placeholder="" autofocus>
                            </label>
                            <label>
                                <span>Prénom</span>
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
                                        <span>Très bien</span>
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
                            @csrf
                        </form>
                    </section>

                    <section id="annonces">
                        <h3>Créer une annonce</h3>
                        <div class="creation-annonce">
                            <form method="POST" action="annonce/store" id="creation-annonce">
                                <span>Titre</span>
                                <input type="text" name="titre" required placeholder="entrez votre titre">

                                <div class="radio">
                                    <span>Je fais visiter</span>
                                    <input type="radio" name="choixVisite" id="guider" value="guider" required>
                                    <span>Je veux visiter</span>
                                    <input type="radio" name="choixVisite" id="visiter" value="visiter" required>
                                </div>

                                <span>Photo</span>
                                <input type="text" name="photo"  placeholder="entrez votre URL DE photo">

                                <span>Description</span>
                                <textarea name="contenu" required placeholder="entrez votre contenu" rows="5"></textarea>

                                <span>Ville</span>
                                <input type="text" name="ville" required placeholder="entrez la ville">

                                <span>Date</span>
                                <input type="date" name="date" required placeholder="entrez la date">

                                <span>Heure</span>
                                <input type="time" name="heure" required placeholder="entrez l'heure">

                                <button type="submit">PUBLIER UNE ANNONCE</button>
                                @csrf
                            </form>
                        </div>

                        <h3>Mes annonces</h3>
                        <div class="annonces">

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
                        </div>
                    </section>
                </div>

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

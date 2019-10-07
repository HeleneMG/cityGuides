<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact - CityGuides</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                    <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="app1">
                <section class="contact">
                    <h2>Formulaire de contact</h2>
                    <form>
                        <label>
                            <span>Nom</span>
                            <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                            <input type="text" name="nom" required placeholder="entrez votre nom">
                        </label>

                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required placeholder="entrez votre email">
                        </label>

                        <label>
                            <span>Message</span>
                            <textarea name="message" cols="10" rows="5" required placeholder="entrez votre message"></textarea>
                        </label>

                        <!-- message confirmation vueJS-->
                        <button type="submit">Envoyer</button>

                    </form>
                </section>
            </div>
        </main>
    </body>

</html>

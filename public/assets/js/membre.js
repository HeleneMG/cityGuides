var app = new Vue({
    el: '#app2',
    // https://fr.vuejs.org/v2/guide/instance.html#Hooks-de-cycle-de-vie-d%E2%80%99une-instance
    mounted: function () {
        // SIMULE UNE FAUSSE SUPPRESSION
        // BRICOLAGE POUR OBTENIR L'AFFICHAGE
        this.supprimerAnnonce({ id: -1 });
    },
    methods: {
        modifierAnnonce: function (annonce) {
            // debug
            console.log(annonce);
            // JE MEMORISE L'ANNONCE A MODIFIER DANS UNE VARIABLE VUEJS
            this.annonceUpdate = annonce;
        },
        supprimerAnnonce: function (annonce) {
            // debug
            console.log(annonce);
            // JE PEUX RECUPERER id A SUPPRIMER
            var formData = new FormData();
            // JE SIMULE EN JS LES INFOS DU FORMULAIRE
            formData.append('id', annonce.id);
            // sÃ©curitÃ© laravel
            // https://laravel.com/docs/5.8/csrf#csrf-x-csrf-token
            formData.append('_token', '{{ csrf_token() }}');

            fetch('annonce/supprimer', {
                method: 'POST',
                body: formData
            })
                .then(function (reponse) {
                    // ON CONVERTIT LE MESSAGE DE REPONSE EN OBJET JSON
                    return reponse.json();
                })
                .then(function (reponseObjetJSON) {
                    if (reponseObjetJSON.confirmation) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.confirmation = reponseObjetJSON.confirmation;
                    }
                    if (reponseObjetJSON.annonces) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.annonces = reponseObjetJSON.annonces;
                    }
                });

        },
        envoyerFormAjax: function (event) {
            // debug
            console.log(event.target);
            // JE VEUX RECUPERER LES INFORMATIONS REMPLIES PAR LE MEMBRE
            var formData = new FormData(event.target);
            // JE REPRENDS L'URL DANS LE HTML
            var urlAction = event.target.getAttribute('action');
            // ET ON ENVOIE LES INFOS VERS LA MEME URL
            fetch(urlAction, {
                method: 'POST',
                body: formData
            })
                .then(function (reponse) {
                    // ON CONVERTIT LE MESSAGE DE REPONSE EN OBJET JSON
                    return reponse.json();
                })
                .then(function (reponseObjetJSON) {
                    if (reponseObjetJSON.confirmation) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.confirmation = reponseObjetJSON.confirmation;
                    }
                    if (reponseObjetJSON.annonces) {
                        // ON VA STOCKER LA CONFORMATION DANS UNE VARIABLE VUEJS
                        app.annonces = reponseObjetJSON.annonces;
                    }
                });
        }
    },
    data: {
        // ICI JE RAJOUTE LES VARIABLES GEREES PAR VUEJS
        annonceUpdate: null,
        annonces: [],
        confirmation: '',
        message: 'Hello Vue !'
    }
});
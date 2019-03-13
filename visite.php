<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre visite</title>

    <!-- Import FrameWork SPECTRE -->
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    <!-- Import FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Import CSS perso -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/picto/logo-bsm-color.svg">

</head>
<body class="body-visite">
    <div class="container">
        <!-- Header -->
        <?php include './inc/nav.php' ?>
        <?php include './inc/burger.php' ?>

        <!-- Section premier viewport -->
        <div class="columns p-relative hide-xl">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href="#tarifs"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante" id="tarifs"></a>
            </div>
        </div>
        <div class="columns h1-page">
            <div class="container text-center">
                <h1>votre visite</h1>
            </div>
        </div>

        <!-- Buttons picture hover -->
        <div class="columns">
            <div class="column col-4 col-md-12 size-menu-hover white">
                <a class="columns text-center h3-auto hover-tarifs" href="#tarifs"><h3>tarifs</h3></a>
                <a class="columns text-center h3-auto hover-horaires" href="#horaires"><h3>horaires</h3></a>
            </div>
            <div class="column col-4 col-md-12 white"">
                <a class="columns text-center h3-auto-big hover-visite" href="#visite"><h3>visite guidée</h3></a>
            </div>
            <div class="column col-4 col-md-12 white"">
                <a class="columns text-center h3-auto hover-access" href="#access"><h3>accéssibilité</h3></a>
                <a class="columns text-center h3-auto hover-proxy" href="#proxy"><h3>à proximité</h3></a>
            </div>
        </div>

    </div><!-- fin de container -->

    
    <div class="container grid-xl">
        <div class="columns section-1 m-top"><!-- Section TARIFS -->
            <div class="column col-6 col-md-12">
                <figure class="figure">
                    <img src="./img/photos/page-visite/tarifs.jpg" alt="photo-bassins-bsm" class="img-responsive">
                </figure>
            </div>
            <div class="column col-6 col-md-12 text-lbsm-right">
                <h3>tarifs</h3>
                <p><span class="text-uppercase">PENDANT LES EXPOSITIONS :</span><br><span class="text-bold">Plein tarif : 5€<br>Tarif réduit : 3€<br></span>
                Gratuit le 1er dimanche du mois ( hors juillet et août)<br><br>
                    Pass Musées Bordeaux : accès illimité<br>Carte jeunes Bordeaux : accès illimité<br><br>Pour les visites de groupe, merci de nous contacter 
                    par mail ou par téléphone au préalable.</p>
            </div>
        </div>
        <div class="columns bloc" id="horaires"><!-- Section HORAIRES -->
            <div class="column col-12">
                <div class="columns">
                    <div class="column col-6 col-md-12 text-lbsm-left">
                        <h3>horaires</h3>
                        <p><span class="text-uppercase">HEURES D’OUVERTURES PENDANT LES EXPOSITIONS :</span><br><br><span class="text-bold">Du mardi au dimanche de 13h30 à 19h
                            <br>Fermé les lundis et jours fériés<br><br></span><span class="text-uppercase">HORS PÉRIODE D’EXPOSITION :</span>
                            <br><br>Le centre culturel de La Base Sous-marine est fermé lorsqu’il n’y a pas d’exposition.</p>
                    </div>
                    <?php include './inc/calendar.php'?>
                </div>
                <div class="columns">
                    <div class="column col-6 col-md-12 col-mr-auto text-justify">
                        <p>Retrouvez l’intégralité des informations concernant l’exposition du moment ainsi que le détail des évènements de la Base sous-marine dans nos sections dédiées :</p>
                    </div>
                </div>
                <div class="columns white">
                    <a class="column col-6 col-md-12 text-center h3-auto hover-medioacqua" href="programmation.php"><h3>medio acqua</h3></a>
                    <a class="column col-6 col-md-12 text-center h3-auto hover-events" href="programmation.php"><h3>évènements</h3></a>
                </div>
            </div>    
        </div>    
        <div class="columns bloc" id="visite"><!-- Section VISITE GUIDÉE -->
            <div class="column col-12">
                <h3>Visite guidée</h3>
            </div>
            <div class="column col-12">
                <p>Notre équipe de <span class="text-bold">médiateurs culturels</span> vous accueille tous les mercredis 
                de 17h à 18h et les samedis de 16h à 17h pendant les périodes d’exposition.<br>
            Sans réservation, limité à 30 personnes.</p>
            </div>

            <!-- PROFIL 1 MEDIATEUR CULTUREL --> 
            <div class="column col-md-12 col-sm-12">
                <div class="photo-profil-1 p-centered"></div>
                <p class="prenom text-center text-bold">Sébastien MIALE</p>
                <p class="text-center">Régie des oeuvres<br>Médiateur culturel</p>
            </div>
            <!-- FIN DE PROFIL 1 -->

            <!-- PROFIL 2 MEDIATEUR CULTUREL -->
            <div class="column col-md-6 col-sm-12 bandeaubleu">
                <div class="photo-profil-2 p-centered"></div>
                <p class="prenom text-center text-bold">Jessica LORA</p>
                <p class="text-center">Médiatrice culturelle</p>
            </div>
            <!-- FIN DE PROFIL 2 -->

            <!-- PROFIL 3 MEDIATEUR CULTUREL -->
            <div class="column col-md-6 col-sm-12 bandeaubleu">
                <div class="photo-profil-3 p-centered"></div>
                <p class="prenom text-center text-bold">Camille LEVY</p>
                <p class="text-center">Médiatrice culturelle</p>
            </div>
            <!-- FIN DE PROFIL 3 -->

            <!-- PROFIL 4 MEDIATEUR CULTUREL -->
            <div class="column col-md-6 col-sm-12 bandeaubleu">
                <div class="photo-profil-4 p-centered"></div>
                <p class="prenom text-center text-bold">Raphaël ROUSSET</p>
                <p class="text-center">Médiateur culturel</p>
            </div>
            <!-- FIN DE PROFIL 4 -->

            <!-- PROFIL 5 MEDIATEUR CULTUREL -->
            <div class="column col-md-6 col-sm-12 bandeaubleu">
                <div class="photo-profil-5 p-centered"></div>
                <p class="prenom text-center text-bold">Maude NOUGARET</p>
                <p class="text-center">Stagiaire<br>Médiatrice culturelle</p>
            </div>
            <!-- FIN DE PROFIL 5 -->
        </div>
        <div class="columns bloc" id="access"><!-- Section ACCESSIBILITÉ -->
            <div class="column col-12">
                <h3>Accèssibilité</h3>
            </div>
            <div class="column col-2 col-mx-auto col-md-6 col-sm-12 bandeaubleu">
                <h4>Tram :</h4>
                <div class="picto-tramb p-centered"></div>
                <p class="text-center">Arrêt<br>Cité du vin</p>
            </div>
            <div class="column col-2 col-mx-auto col-md-6 col-sm-12 bandeaubleu">
                <h4>Tram :</h4>
                <div class="picto-tramc p-centered"></div>
                <p class="text-center">Arrêt<br>Ravezies</p>
            </div>
            <div class="column col-2 col-mx-auto col-md-6 col-sm-12 bandeaubleu">
                <h4>Bus :</h4>
                <div class="picto-bus p-centered"></div>
                <p class="text-center">Arrêt Latule<br>Liane 9 & 32</p>
            </div>
            <div class="column col-2 col-mx-auto col-md-6 col-sm-12 bandeaubleu">
                <h4>V³ TBM:</h4>
                <div class="picto-vcub p-centered"></div>
                <p class="text-center">Station<br>Lucien Faure</p>
            </div>
        </div>
        <div class="columns bloc" id="proxy"><!-- Section PROXIMITÉ -->
            <div class="column col-6 col-md-12">
                <iframe width="100%" height="100%" frameBorder="0" allowfullscreen src="https://umap.openstreetmap.fr/fr/map/base-sous-marine-bordeaux_301383?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=true"></iframe><p><a href="https://umap.openstreetmap.fr/fr/map/base-sous-marine-bordeaux_301383">Voir en plein écran</a></p></div>
            <div class="column col-6 col-md-12 text-lbsm-right">
                <h3>à proximité</h3>
                <h4>BARS & RESTAURANTS :</h4>
                <ul>
                    <li>iBoat</li>
                    <li>McDonald's</li>
                    <li>Bistro Régent La Péniche</li>
                    <li>Restaurant Saudade</li>
                    <li>V and B Bordeaux-Lac</li>
                </ul>
                <h4>divertissement :</h4>
                <ul>
                    <li>Parc de loisirs Kidooland</li>
                    <li>Stade Bordelais Asptt - BMX</li>
                    <li>Zone commerciale de Bordeaux-Lac</li>
                </ul>
                <h4>hôtels :</h4>
                <ul>
                    <li>Apparteo Bordeaux</li>
                    <li>Radisson Blu Hôtel Bordeaux</li>
                    <li>Appart-hôtel Mer & Golf City</li>
                    <li>Chambre d'hôtes La Petite Annick</li>
                </ul>
            </div>
            
        </div>
    </div>

    <!-- footer -->
    <?php include './inc/footer.php' ?>

        
    <!-- Import JQUERY -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script><!-- Fin d'import JQUERY -->

    <script src="js/script-accueil.js"></script>
    <script src="js/js-swap.js"></script>
</body>
</html>
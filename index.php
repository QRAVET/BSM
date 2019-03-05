<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Import FrameWork SPECTRE -->
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

    <!-- Import FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Import CSS perso -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Surcharge SPECTRE -->

</head>
<body class="sea"> 
    <div class="container">

        <!-- Page version PC -->
        <div class="columns index-header">
            <div class="column col-3 col-mr-auto hide-md">
                <a href=""><img src="img/picto/logo-bsm-color.svg" alt="logo-bsm" class="logo-bsm-color"></a>
            </div>
            <div class="column col-12 show-md col-mx-auto">
                <a href=""><img src="img/picto/logo-bsm-color.svg" alt="logo-bsm" class="logo-bsm-color p-centered"></a>
            </div>
            <div class="column col-3 col-ml-auto hide-md">
                <div class="columns">
                    <a href="https://www.facebook.com/BasesousmarinedeBordeaux/" target="_blank" class="logo-fb-blue"></a>
                    <a href="https://www.instagram.com/p/BsYO4g2H7M6/" target="_blank" class="logo-insta-blue"></a>          
                </div>
            </div>
        </div>
        <div class="columns p-sticky p-centered picto-sous-marin tooltip" data-tooltip="Vers la surface ...">
            <a href=""><img src="img/picto/sous-marin.svg" alt="picto-sous-marin"></a>
        </div>

        <div class="button-white-down col-mx-auto hide-md tooltip" data-tooltip="Sens de la visite">
            <a href="#menu-lbsm"><img src="img/picto/button/button-white.svg" alt="ancre-section-suivante"></a>
        </div>
        <div class="columns p-small white h3-accueil">
            <div class="column col-3 col-ml-auto hide-md">
                <div id="menu-programmation" class="text-right">
                    <a href=""><h3>programmation</h3></a>
                    <h4>medio acqua</h4>
                    <p>Parcourez l'exposition du moment.</p>
                    <h4>évènements</h4>
                    <p>Accèdez à la programmation variée et éclectique d’évènements de la Base Sous-marine.</p>
                </div>
                <div id="menu-contact" class="text-right">
                    <a href=""><h3>contact</h3></a>
                    <h4>réseaux sociaux</h4>
                    <p>Retrouvez l’actualité de la Base Sous-marine sur les réseaux sociaux.</p>
                    <h4>partenaires</h4>
                    <p>Partagez-nous vos idées et faites partie de l’aventure de la BSM, en tant qu’artiste, mécène, colléctivité ou association.</p>
                </div>
            </div>
            <div class="column col-4 text-uppercase box-h1 hide-md">
                <h1 class="white h1-accueil"><b>la base</b> sous-marine</h1>
            </div>
            <div class="column col-md-12 text-uppercase text-center show-md">
                <h1 class="white h1-accueil"><b>la base</b><br>sous-marine</h1>
            </div>
            <div class="column col-3 col-mr-auto hide-md">
                <div id="menu-lbsm" class="text-left">
                    <a href=""><h3>la base sous marine</h3></a>
                    <h4>histoire</h4>
                    <p>Passez en revue les grandes dates qui ont fait l’Histoire de ce lieu aux proportions hors-normes.</p>
                    <h4>PROJETS FUTURS</h4>
                    <p>Découvrez les projets d'aujourd'hui qui façonnent la Base de demain.</p>
                </div>
                <div id="menu-visite" class="text-left">
                    <a href=""><h3>votre visite</h3></a>
                    <h4>tarifs</h4>
                    <p>Conditions et tarifs aux évènements et expositions permanantes.</p>
                    <h4>horaires</h4>
                    <p>Renseignez-vous sur la saisonnalité des expositions permanantes et des évènements.</p>
                    <h4>visite guidée</h4>
                    <p>Plannifiez une visite guidée et partagez un moment unique avec notre équipe de médiateurs culturels.</p>
                    <h4>accèssibilité</h4>
                    <p>Rendez-nous visite à pied, en bus, voiture ou tramway.</p>
                    <h4>à proximité</h4>
                    <p>Découvrez les lieux tendances qui animent le quartier des Bassins à Flots.</p>
                </div>
            </div>
        </div>
        <!-- Page version Mobile/Tablette-->
        <div class="columns mobile">
            <div class="column col-md-12">
                <div class="column col-7 col-mx-auto">
                    <div class="divider"></div>
                </div>
            </div>
            <div class="column col-10 col-mx-auto text-left">
                <a href=""><h3><i class="fas fa-chevron-circle-right yellow-bsm"></i> la base sous marine</h3></a>
                <h4>histoire</h4>
                <p>Passez en revue les grandes dates qui ont fait l’Histoire de ce lieu aux proportions hors-normes.</p>
                <h4>PROJETS FUTURS</h4>
                <p>Découvrez les projets d'aujourd'hui qui façonnent la Base de demain.</p>
            </div>
        </div>

    </div><!-- Fin de container -->

    <!-- footer -->
    <?php include './inc/footer.php' ?>

        
    <!-- Import JQUERY -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script><!-- Fin d'import JQUERY -->

    <script src="script-accueil.js"></script>

</body>
</html>
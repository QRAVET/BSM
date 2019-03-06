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

</head>
<body>
    <div class="container">
        <!-- Header -->
        <?php include './inc/nav.php' ?>
        <?php include './inc/burger.php' ?>

        <!-- Section image hero -->
        <div class="columns p-relative">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href="#intro"><img src="img/picto/button/button-white.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
        <div class="columns bsm-hero">
            <div class="container grid-xl">
                <h1 class="h1-hero-bsm">histoire et<br>projets de la<br><span class="yellow-bsm shadow">base sous-marine</span></h1>
            </div>
        </div>

        <!-- page classique -->
        <div class="columns" id="intro">
            <div class="container grid-xl">
                <div class="columns intro-lbsm">
                    <h2>la base sous-marine</h2>
                    <h3>Un lieu chargé d’histoire où le passé fait vibrer l’avenir </h3>
                    <p class="text-justify">Active à peine plus d’<span class="text-bold">un an pendant l’Occupation</span>, la Base sous-marine de Bordeaux cristallise encore les souvenirs 
                        douloureux des heures sombres du Port de la Lune. Le bunker attire pourtant <span class="text-bold">depuis les années 1960</span> des artistes, 
                        cinéastes, plasticiens et musiciens fascinés par <span class="text-bold">l’esprit du lieu</span>. Institutionnalisée au début des années 1990, 
                        la base sous-marine devient un espace dédié au nautisme avant d’être consacrée à <span class="text-bold">l’art contemporain</span> au début du XXIe siècle.</p>
                </div>
            </div>

            <!-- Buttons picture hover -->
            <div class="container">
                <div class="columns white">
                    <a class="column col-6 col-md-12 text-center h3-auto hover-histoire" href="#histoire"><h3>histoire</h3></a>
                    <a class="column col-6 col-md-12 text-center h3-auto hover-projets" href="#projets"><h3>projets</h3></a>
                </div>
            </div>

            <div class="container grid-xl" id="histoire">
                <div class="columns">
                    <h2 >un bunker en marge de la ville</h2>
                </div>
                <div class="columns bloc">
                    <div class="column col-6 text-lbsm-left text-justify">
                        <div class="columns">La base sous-marine de Bordeaux est l’une des</div>
                        <div class="text-bold columns text-highlight-number">
                            <div class="column col-3 text-number">5</div>
                            <div class="column col-6 text-uppercase">
                                <div class="column col-12 text-1">bases</div>
                                <div class="column col-12 text-2">construites</div>
                            </div>
                        </div>
                        <div class="columns">
                            sur le territoire français par les Allemands 
                            au cours de la Seconde Guerre mondiale, elle est à inclure dans l’ensemble hétérogène du Mur de l’Atlantique.<br><br> 
                            Cette fortification était considérée par Adolf Hitler comme un outil de propagande du IIIe Reich.<br>Le Führer 
                            avait imaginé que sa création durerait mille ans, bien que les travaux monumentaux engagés en 1940 n’arrivèrent jamais à leur terme.
                        </div>
                    </div>
                    <div class="column col-6">
                        <figure class="figure">
                            <img src="./img/photos/page-lbsm/bsm-historique.jpg" alt="photo-historique-bsm" class="img-responsive">
                        </figure>
                    </div>
                </div>

                <div class="columns bloc">
                    <div class="column col-6">
                        <figure class="figure">
                            <img src="./img/photos/page-lbsm/bsm-aerienne.jpg" alt="photo-aerienne-bsm" class="img-responsive">
                        </figure>
                    </div>
                    <div class="column col-6 text-lbsm-right text-justify">
                        <div class="columns">
                            <p>La base sous-marine s’enracine ainsi à l’emplacement du réservoir d’alimentation du bassin à flot n° 2 à l’aide de 
                            <span class="text-bold">trois mille poutres en béton armé</span> assurant sa stabilité dans le sol tourbeux.
                            <br><br>En dix-neuf mois de travaux,</p>
                        </div>
                        <div class="columns text-bold text-3 text-highlight">
                            600 000 m<span class="exposant">3</span>
                        </div>
                        <div class="columns">
                            <p>de béton sont coulés grâce au travail constant fourni par six mille cinq cents ouvriers volontaires, 
                                contractuels ou forcés, afin de rendre la base opérationnelle.<br><br>À l’achèvement des travaux en <span class="text-bold">mai 1943</span>, 
                                elle occupe une surface au sol de quarante-cinq mille mètres carrés, soit deux cent trente-cinq mètres 
                                de long, cent soixante mètres de large pour une hauteur de dix-neuf mètres.</p>
                        </div>
                    </div>
                </div>
                <div class="columns bloc">
                    <div class="column col-6 text-lbsm-left text-justify">
                        <div class="columns">
                            <p>Le plan de la base sous-marine de Bordeaux produit par le service Marinebauwesen de la Kriegsmarine reprend ceux des bases de Brest,
                                 de Saint-Nazaire et de La Pallice et comprend <span class="text-bold">11 alvéoles de trois types différents</span>.<br><br>
                                 Ses formes coulées dans le béton répondent avec brio à l’unique fonction d’un édifice militaire : </p>
                        </div>
                        <div class="columns text-center">
                            <div class="column col-2"><i class="fas fa-quote-left text-2"></i></div>
                            <div class="column col-8 text-bold text-uppercase"><p class="text-4">protéger ses occupants<br>des attaques extérieures</p></div>
                            <div class="column col-2"><i class="fas fa-quote-right text-2"></i></div>
                        </div>
                        <div class="columns">
                            <p>Un ennemi inattendu, le temps, a toutefois patiné ses murs, l’a rendu sauvage, permettant à la nature d’y reprendre ses droits après la Libération.</p>
                        </div>
                    </div>
                    <div class="column col-6">
                        <figure class="figure">
                            <img src="./img/photos/page-lbsm/bsm-beton.jpg" alt="photo-murs-bsm" class="img-responsive">
                        </figure>
                    </div>
                </div>


                <!-- NEUTRE A COPIER COLLER --> <span class="text-bold"></span>
                <div class="columns bloc">
                    <div class="column col-6"></div>
                    <div class="column col-6"></div>
                </div>

            </div>
        </div>

    </div><!-- Fin de container -->
    
    <!-- footer -->
    <?/*php include './inc/footer.php' */?>

        
    <!-- Import JQUERY -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script><!-- Fin d'import JQUERY -->
</body>
</html>
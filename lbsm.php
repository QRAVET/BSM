<!DOCTYPE html> <span class="text-bold"></span>
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
        <div class="columns p-relative box-view">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href=""><img src="img/picto/button/button-white.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
        <div class="columns bsm-hero"></div>

        <!-- page classique -->
        <div class="columns">
            <div class="container grid-xl">
                <div class="columns">
                    <h2>la base sous-marine</h2>
                    <h3>Un lieu chargé d’histoire où le passé fait vibrer l’avenir </h3>
                    <p class="text-justify">Active à peine plus d’<span class="text-bold">un an pendant l’Occupation</span>, la Base sous-marine de Bordeaux cristallise encore les souvenirs 
                        douloureux des heures sombres du Port de la Lune. Le bunker attire pourtant <span class="text-bold">depuis les années 1960</span> des artistes, 
                        cinéastes, plasticiens et musiciens fascinés par <span class="text-bold">l’esprit du lieu</span>. Institutionnalisée au début des années 1990, 
                        la base sous-marine devient un espace dédié au nautisme avant d’être consacrée à <span class="text-bold">l’art contemporain</span> au début du XXIe siècle.</p>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column col-6 col-md-12 bg-blue-green text-center white">
                        <h3>histoire</h3>
                    </div>
                    <div class="column col-6 col-md-12 bg-yellow-bsm text-center white">
                        <h3>projets</h3>
                    </div>
                </div>
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
</body>
</html>
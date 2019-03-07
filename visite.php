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
<body class="body-visite">
    <div class="container">
        <!-- Header -->
        <?php include './inc/nav.php' ?>
        <?php include './inc/burger.php' ?>

        <!-- Section premier viewport -->
        <div class="columns p-relative">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href="#intro"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
        <div class="columns">
            <div class="container grid-xl text-center">
                <h1>programmation</h1>
            </div>
        </div>
        <!-- Buttons picture hover -->
        <div class="container">
            <div class="columns white">
                <a class="column col-6 col-md-12 text-center h3-auto hover-histoire" href="#histoire"><h3>histoire</h3></a>
                <a class="column col-6 col-md-12 text-center h3-auto hover-projets" href="#projets"><h3>projets</h3></a>
            </div>
        </div>
        <!-- Buttons picture hover -->
        <div class="container">
            <div class="columns medium-grey">
                <div class="column col-4 size-menu-hover">
                    <a class="column col-12 text-center h3-auto hover-tarifs" href="#tarifs"><h3>tarifs</h3></a>
                    <a class="column col-12 text-center h3-auto hover-horaires" href="#horaires"><h3>horaires</h3></a>
                </div>
                <div class="column col-4">
                    <a class="column col-12 text-center h3-auto-big hover-visite" href="#visite"><h3>visite guidée</h3></a>
                </div>
                <div class="column col-4">
                    <a class="column col-12 text-center h3-auto hover-access" href="#access"><h3>accéssibilité</h3></a>
                    <a class="column col-12 text-center h3-auto hover-proxy" href="#proxy"><h3>à proximité</h3></a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- footer -->
    <?/*php include './inc/footer.php' */?>

        
    <!-- Import JQUERY -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script><!-- Fin d'import JQUERY -->

    <script src="js/script-accueil.js"></script>
</body>
</html>
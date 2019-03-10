<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programmation</title>

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
<body class="body-programmation">
    <div class="container">
        <!-- Header -->
        <?php include './inc/nav.php'?>
        <?php include './inc/burger.php'?>

        <!-- Section premier viewport -->
        <div class="columns p-relative hide-xl">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href="#tarifs"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
        <div class="columns h1-page">
            <div class="container text-center">
                <h1>programmation</h1>
            </div>
        </div>

        <!-- Buttons picture hover -->
        <div class="columns">
            <div class="column col-6 col-md-12 white"">
                <a class="columns text-center h3-auto-big hover-medioacqua-big" href="#medioacqua"><h3>medioacqua</h3></a>
            </div>
            <div class="column col-6 col-md-12 white"">
                <a class="columns text-center h3-auto-big hover-events-big" href="#events"><h3>évènements</h3></a>
            </div>
        </div>
    
        <!-- Work in progress -->
        <div class="columns h1-page">
            <div class="column col-8 col-mx-auto empty">
                <div class="empty-icon">
                    <i class="icon icon-people icon-4x"></i>
                </div>
                <p class="empty-title h2 text-uppercase">Page en cours de construction</p>
                <p class="empty-subtitle">Rendez-nous visite prochainement</p>
                <div class="loading loading-lg"></div>
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
</body>
</html>
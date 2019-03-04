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
<body class="sea p-relative"> 
    <div class="container">
        <div class="columns index-header">
            <div class="column col-3 col-mr-auto">
                <a href=""><img src="img/picto/logo-bsm-color.svg" alt="logo-bsm" class="logo-bsm-color"></a>
            </div>
            <div class="columns box-social">
                <a href="https://www.facebook.com/BasesousmarinedeBordeaux/" target="_blank" class="logo-fb-blue"></a>
                <a href="https://www.instagram.com/p/BsYO4g2H7M6/" target="_blank" class="logo-insta-blue"></a>          
            </div>
        </div>
        <div class="columns p-sticky p-centered picto-sous-marin tooltip" data-tooltip="Vers la surface ...">
            <a href=""><img src="img/picto/sous-marin.svg" alt="picto-sous-marin"></a>
        </div>
        <div class="columns text-uppercase box-h1">
            <h1 class="white h1-accueil"><b>la base</b> sous-marine</h1>
        </div>


        <!-- footer -->
        <div class="columns">
            <div class="column col-12">
                <?php include './inc/footer.php' ?>
            </div>
        </div>
    </div>
    
    <!-- Import JQUERY -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script><!-- Fin d'import JQUERY -->

    <!-- <script src="js.js"></script> -->

</body>
</html>
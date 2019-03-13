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
<body class="body-programmation" class="p-absolute">
    <div class="container">
        <!-- Header -->
        <?php include './inc/nav.php'?>
        <?php include './inc/burger.php'?>

        <!-- Section premier viewport -->
        <div class="columns p-relative hide-xl">
            <div class="button-down hide-md tooltip" data-tooltip="En savoir plus">
                <a href="#medioacqua"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
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
    </div>
        
    <div id="medioacqua" class="section-container">
        <div class="container grid-xl">
            <div class="columns">
                <h2>medio acqua :</h2>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column col-1"></div>
                <div class="column col-4 col-md-12">
                    <div class="columns">
                        <h3>l'exposition collective du moment</h3>
                    </div>
                    <div class="columns">
                        <p>Du 26 Octobre 2018 au 06 Avril 2019</p>
                    </div>
                    <div class="columns">   
                        <p class="text-justify">Inspiré par l’histoire, l’architecture et la géographie du lieu, le commissaire d’exposition, 
                        <span class="text-bold">Renato <span class="text-uppercase">casciani</span></span> réunit des 
                        installations d’artistes majeurs et emblématiques de la scène artistique française et internationale ainsi qu’une sélection 
                        d’oeuvres vidéos de jeunes artistes émergents et récemment diplômés de la prestigieuse <span class="text-bold">école du Freznoy</span> ( Studio national des 
                        arts contemporains ) pour un parcours poétique puisant son inspiration dans l’univers aquatique.<br><br>Le titre de l’exposition fait 
                        écho à l’expression consacrée par les Romains pour nommer cette région, «<span class="text-bold">In medio aquae</span>», au milieu des eaux, entre-deux-mers, 
                        devenue aujourd’hui Médoc.<br><br>L’exposition vous invite à <span class="text-bold">déambuler</span> dans les espaces monumentaux et imposants de la Base sous-marine 
                        pour <span class="text-bold">une promenade onirique et parfois surréaliste</span>. Une balade au détour de laquelle les oeuvres évoquent 
                        <span class="text-bold">l’eau sous toutes ses formes</span>.</p>
                    </div>
                </div>
                <div class="column col-1"></div>
                <div class="column col-6 col-md-12">
                    <figure class="figure">
                        <img src="./img/photos/page-prog/affiche-medio-acqua.jpg" alt="affiche-medio-acqua" class="img-responsive">
                    </figure>
                </div>
            </div>
        </div>
        <div class="columns p-relative hide-xl">
            <div class="button-down-mid hide-md tooltip" data-tooltip="Voir aussi les évènements">
                <a href="#events"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
    </div>

    <div id="events" class="section-container">
        <div class="container grid-xl">
            <div class="columns">
                <h2>évènements :</h2>
            </div>
        </div>
        <div class="container">
            <div class="columns col-gapless">
                <div class="column col-1"></div>
                <div class="column col-5 col-md-12">
                    <div class="columns">
                        <h3>un écrin unique pour tous les arts</h3>
                    </div>
                    <div class="column events">
                        <h3>vernissage</h3>
                        <h3>concerts</h3>
                        <h3>théâtre</h3>
                        <h3>danse contemporaine</h3>
                        <h3>art lyrique</h3>
                    </div>
                </div>
                <div class="column col-6 col-md-12">
                    <figure class="figure">
                        <img src="./img/photos/page-prog/concert-bsm.jpg" alt="photo-concert-bsm" class="img-responsive">
                    </figure>
                </div>
            </div>
        </div>
        <div class="columns p-relative hide-xl">
            <div class="button-down-mid hide-md tooltip" data-tooltip="Programmation des évènements">
                <a href="#events-detail"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
            </div>
        </div>
    </div>

    <div id="events-detail" class="section-container">
        <div class="container grid-xl">
            <div class="columns">
                <h2>programmation des évènements</h2>
            </div>
            <div class="columns ">
                <!-- EVENT 1 -->
                <div class="column col-3 col-md-12 col-mx-auto bg-yellow-bsm vignette-events">
                    <h3 class="white">concert</h3>
                    <h4>Chloé Endless Revisions</h4>
                    <p class="text-bold">Le 19/05/18 de 18h à 00h</p>
                    <p>Chloé est compositrice, ce qui signifie qu'elle donne vie à une idée artistique...</p>
                    <a href="https://www.facebook.com/events/359026874598186/" target="_blank"><div class="more-button"></div></a>
                </div><!-- fin de l'event 1-->

                <!-- EVENT 2 -->
                <div class="column col-3 col-md-12 col-mx-auto bg-yellow-bsm vignette-events">
                    <h3 class="white">VERNISSAGE</h3>
                    <h4>Street Art & Patrimoine</h4>
                    <p class="text-bold">Le 27/09/18 de 18h30 à 20h</p>
                    <p>Autour du thème « Street Art et Patrimoine » animé par la journaliste et critique d’art Stéphanie Lemoine....</p>
                    <a href="https://www.facebook.com/events/858821557841025/" target="_blank"><div class="more-button"></div></a>
                </div><!-- fin de l'event 2-->

                <!-- EVENT 2 -->
                <div class="column col-3 col-md-12 col-mx-auto bg-yellow-bsm vignette-events">
                    <h3 class="white">spectacle</h3>
                    <h4>Fassbinder</h4>
                    <p class="text-bold">Du 18 au 20/10/18 à 20h30</p>
                    <p>Fassbinder (funérailles), fresque délirante et ambitieuse d'après le roman Fassbinder la mort en fanfare d'Alban Lefranc....</p>
                    <a href="https://www.facebook.com/events/858821557841025/" target="_blank"><div class="more-button"></div></a>
                </div><!-- fin de l'event 2-->

                
            </div>
        </div>
        <div class="columns p-relative hide-xl">
            <div class="button-down-mid hide-md tooltip" data-tooltip="Contactez-nous">
                <a href="#footer"><img src="img/picto/button/button-grey.svg" alt="ancre-section-suivante"></a>
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
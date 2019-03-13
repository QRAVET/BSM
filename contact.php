<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

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
<body class="body-contact">
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
                <h1>contact</h1>
                <p>Bassins à flot - Bacalan - Boulevard Alfred Daney 33000 BORDEAUX - <i class="fas fa-phone medium-grey"></i> tél : 05.56.11.11.50</p>
            </div>
        </div>       
        
        <!-- Buttons picture hover -->
        <div class="columns">
            <div class="column col-6 col-md-12 white">
                <a class="columns text-center h3-auto-big hover-social" href="#social"><h3>réseaux sociaux</h3></a>
            </div>
            <div class="column col-6 white hide-md">
                <a class="columns text-center h3-auto hover-contact" href="#contact"><h3>contact</h3></a>
                <a class="columns text-center h3-auto hover-partners" href="#partners"><h3>partenaires</h3></a>
            </div>
            <div class="column col-6 col-md-12 white show-md">
                <a class="columns text-center h3-auto hover-contact" href="#contact"><h3>contact</h3></a>
            </div>
            <div class="column col-6 col-md-12 white show-md">
                <a class="columns text-center h3-auto hover-partners" href="#partners"><h3>partenaires</h3></a>
            </div>
        </div>
    </div><!-- fin du container-->

    <div class="container grid-xl">
        <div class="columns section-1" id="social"><!-- Section RESEAUX SOCIAUX -->
            <h3>réseaux sociaux</h3>
        </div>
        <div class="columns">
            <div class="column col-6 col-md-12">
                <div class="columns">
                    <div class="column col-2 col-mx-auto"></div>
                    <div class="column col-1 logo-insta-footer"></div>
                    <div class="column col-3 api-insta"><h4>instagram</h4></div>
                    <div class="column col-2 col-mx-auto"></div>
                </div>
                <!-- Work in progress -->
                <div class="columns">
                    <div class="column col-10 col-mx-auto empty">
                        <div class="empty-icon">
                            <i class="icon icon-people icon-4x"></i>
                        </div>
                        <p class="empty-title h2 text-uppercase hide-md">Page en cours de construction</p>
                        <p class="empty-title h4 text-uppercase show-md">Page en cours de construction</p>
                        <p class="empty-subtitle">Rendez-nous visite prochainement</p>
                        <div class="loading loading-lg"></div>
                    </div>
                </div><!-- fin de Work in progress -->
            </div>
            <div class="column col-6 col-md-12">
                <div class="columns">
                <div class="column col-2 col-mx-auto"></div>
                    <div class="column col-1 logo-fb-footer"></div>
                    <div class="column col-3 api-fb"><h4>facebook</h4></div>
                    <div class="column col-2 col-mx-auto"></div>
                </div>
                <!-- Work in progress -->
                <div class="columns">
                    <div class="column col-10 col-mx-auto empty">
                        <div class="empty-icon">
                            <i class="icon icon-people icon-4x"></i>
                        </div>
                        <p class="empty-title h2 text-uppercase hide-md">Page en cours de construction</p>
                        <p class="empty-title h4 text-uppercase show-md">Page en cours de construction</p>
                        <p class="empty-subtitle">Rendez-nous visite prochainement</p>
                        <div class="loading loading-lg"></div>
                    </div>
                </div><!-- fin de Work in progress -->
            </div>
        </div>
        <div class="columns bloc" id="contact"><!-- Section CONTACTEZ-NOUS -->
            <h3>contactez-nous</h3>
        </div>
        <form class="columns" method="POST">
            <div class="column col-2"></div>
            <div class="column col-8">
                <div class="columns">
                    <div class="column col-6 col-md-12">
                        <h6 class="text-uppercase">votre nom*</h6>
                        <input type="text" name="nom" class="bg-yellow-bsm" placeholder="...">                      
                        <h6 class="text-uppercase">votre prénom*</h6>                    
                        <input type="text" name="prénom" class="bg-yellow-bsm" placeholder="...">
                        <h6 class="text-uppercase">votre adresse de messagerie*</h6>
                        <input type="email" name="email" class="bg-yellow-bsm" placeholder="...">                        
                    </div>
                    <div class="column col-1"></div>
                    <div class="column col-5 hide-md">
                        <figure class="figure">
                            <img src="./img/photos/page-contact/pic-form.jpg" alt="photo-interieur-bsm" class="img-responsive">
                        </figure>
                    </div>
                </div>
                <div class="columns">
                    <div class="column col-12">
                        <h6 class="text-uppercase">votre message*</h6>
                        <textarea type="text" name="message" class="bg-yellow-bsm" placeholder="..."></textarea>
                    </div>
                </div>
                <div class="columns">
                    <div class="column col-4 col-md-12">
                        <p>Les champs suivis de * sont obligatoires</p>
                    </div>
                    <div class="column col-4 col-md-12">
                        <button class="text-uppercase send-button p-centered" type="submit"></button>
                    </div>
                    <div class="column col-4 col-md-12"></div>
                </div>
            </div>
            <div class="column col-2"></div>
        </form>
        <div class="columns bloc" id="partners"><!-- Section PARTENAIRES -->
            <h3>partenaires</h3>
        </div>
        <div class="columns">
            <p class="text-justify">Vous souhaitez ajouter votre pierre à la <span class="text-bold">formidable histoire</span> de la Base Sous-marine ? N’hésitez pas et <span class="text-bold">contactez-nous</span>.
            Les contacts d’aujourd’hui font les partenariats de demain ! Et nous avons de <span class="text-bold">nombreux projets</span> à développer avec vous.<br>
            Merci à nos nombreux partenaires de nous avoir aidé à faire de <span class="text-bold">la Base Sous-marine</span> un lieu de rencontre, de partage et d’animation unique sur le bassin Bordelais.</p>
            <div class="columns bg-blue-green partenaires">
                <!-- partenaire 1 -->
                <div class="logo-madd col-2 col-lg-12 col-mx-auto popover popover-right margin-1">
                    <a href="./index.php"><img src="img/photos/page-contact/partenaires/logo-MADD.jpg" alt="logo-madd"></a>
                    <div class="popover-container">
                        <div class="card">
                            <div class="card-header">
                                <h6>MADD BORDEAUX</h6>
                            </div>
                            <div class="card-body">
                                <p>L’équipe du musée des arts décoratifs de bordeaux met en place une programmation dynamique d’expositions temporaires autour des arts décoratifs et du design.</p> 
                            </div>
                            <div class="card-footer">
                                <a href="https://madd-bordeaux.fr/accueil" target="_blank"><img src="img/picto/site-web.svg" alt="logo-web" class="logo-web"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- fin de partenaire 1 -->

                <!-- partenaire 2 -->
                <div class="logo-iboat col-2 col-lg-12 col-mx-auto popover popover-right margin-2">
                    <a href="./index.php"><img src="img/photos/page-contact/partenaires/logo-iboat.jpg" alt="logo-iboat"></a>
                    <div class="popover-container">
                        <div class="card">
                            <div class="card-header">
                                <h6>i.boat</h6>
                            </div>
                            <div class="card-body">
                                <p>Situé dans la cale, sont programmés des concerts, des prestations lives et des sets de djs, mais aussi des artistes en résidence. 
                                Avec son dancefloor, son soundsystem, son écran, et son décor pour le moins atypique, le club est non seulement 
                                le coeur, mais aussi l'âme de l'iboat.</p> 
                            </div>
                            <div class="card-footer">
                                <a href="http://www.iboat.eu" target="_blank"><img src="img/picto/site-web.svg" alt="logo-web" class="logo-web"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- fin de partenaire 2 -->

                <!-- partenaire 3 -->
                <div class="logo-lorangeade col-2 col-lg-12 col-mx-auto popover popover-right margin-1">
                    <a href="./index.php"><img src="img/photos/page-contact/partenaires/logo-lorangeade.jpg" alt="logo-lorangeade"></a>
                    <div class="popover-container">
                        <div class="card">
                            <div class="card-header">
                                <h6>l'orangeade</h6>
                            </div>
                            <div class="card-body">
                                <p>Producteur d'évènements musicaux à Bordeaux et en France depuis 2014, le collectif 
                                explore des lieux atypiques pour poser ses vinyles. L'Orangeade privilégie la black music et le groove.</p> 
                            </div>
                            <div class="card-footer">
                                <a href="https://www.facebook.com/lorangeademusic/" target="_blank"><img src="img/picto/site-web.svg" alt="logo-web" class="logo-web"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- fin de partenaire 3 -->

                <!-- partenaire 4 -->
                <div class="logo-bordeaux col-2 col-lg-12 col-mx-auto popover popover-left margin-2">
                    <a href="./index.php"><img src="img/photos/page-contact/partenaires/logo-bordeaux.jpg" alt="logo-bordeaux"></a>
                    <div class="popover-container">
                        <div class="card">
                            <div class="card-header">
                                <h6>Mairie de Bordeaux</h6>
                            </div>
                            <div class="card-body">
                                <p>Le site officiel de la ville de Bordeaux informe sur l'actualité, l'agenda, les services, les démarches et publie 
                                des guides pour sortir, étudier, travailler et vivre à Bordeaux.</p> 
                            </div>
                            <div class="card-footer">
                                <a href="http://www.bordeaux.fr/" target="_blank"><img src="img/picto/site-web.svg" alt="logo-web" class="logo-web"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- fin de partenaire 4 -->

                <!-- partenaire 5 -->
                <div class="logo-frac col-2 col-lg-12 col-mx-auto popover popover-left margin-1">
                    <a href="./index.php"><img src="img/photos/page-contact/partenaires/logo-frac.jpg" alt="logo-frac"></a>
                    <div class="popover-container">
                        <div class="card">
                            <div class="card-header">
                                <h6>Frac aquitaine</h6>
                            </div>
                            <div class="card-body">
                                <p>Soutenir la création contemporaine par la constitution d’une collection d’œuvres d’art pour la porter à la 
                                connaissance du plus grand nombre, tel est l’engagement qui a fondé l’ADN du Frac Aquitaine.</p> 
                            </div>
                            <div class="card-footer">
                                <a href="https://fracnouvelleaquitaine-meca.fr/" target="_blank"><img src="img/picto/site-web.svg" alt="logo-web" class="logo-web"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- fin de partenaire 5 -->                
            </div><!-- fin des partenaires -->
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
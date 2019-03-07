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
<body class="body-bsm">
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
        </div>
        <!-- Buttons picture hover -->
        <div class="container">
            <div class="columns white">
                <a class="column col-6 col-md-12 text-center h3-auto hover-histoire" href="#histoire"><h3>histoire</h3></a>
                <a class="column col-6 col-md-12 text-center h3-auto hover-projets" href="#projets"><h3>projets</h3></a>
            </div>
        </div>

        <!-- SECTION HISTOIRE -->
        <div class="container grid-xl" id="histoire">
            <div class="columns">
                <h2>un bunker en marge de la ville</h2>
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
            <div class="columns bloc">
                <p class="colonne-text text-justify">C’est pourtant par la figure d’un homme ayant vécu l’épisode douloureux des camps de concentration que la base sous-marine 
                    de Bordeaux connaît sa première « invasion culturelle ».<br><br>En 1964, <span class="text-bold">Jean Cayrol</span>, réputé pour son oeuvre poétique 
                    la « lazaréenne », explore notamment les phénomènes de concentration et d’identification au travers de son second long 
                    métrage Le Coup de grâce, dont la scène finale se situe dans la base bordelaise.<br><br>Malgré un vif intérêt de la part 
                    de la scène artistique émergeante de Bordeaux entre les années 1960 et 1980, la base sous-marine reste toujours à 
                    l’abandon.<br><br>Un abandon doublement justifié par <span class="text-bold">l’importance des coûts d’entretien et de gestion</span> d’un tel bâtiment 
                    par le Port Autonome de Bordeaux.<br><br>À l’aube des années 1980, l’avenir de la base sous-marine est lié à celui du port 
                    de Bordeaux dont l’activité <span class="text-bold">décline inexorablement</span> face aux complexes portuaires modernes de Blaye, Bassens, 
                    Le Verdon et Ambès, situés en amont de la Garonne.</p>
            </div>
        </div>
        <!-- FIN DE SECTION HISTOIRE -->
        
        <!-- SETION PROJETS -->
        <div class="container grid-xl" id="projets">
            <div class="columns">
                <h2>une reconversion programmée</h2>
            </div>
            <div class="columns bloc">
                <div class="column col-6">
                    <figure class="figure">
                        <img src="./img/photos/page-lbsm/bsm-indoor.jpg" alt="photo-interieur-bsm" class="img-responsive">
                    </figure>
                </div>
                <div class="column col-6 text-lbsm-right text-justify">
                    <p>La base sous-marine telle que nous la connaissons aujourd’hui doit être considérée comme une <span class="text-bold">expérimentation culturelle</span>.<br><br>
                    Elle est le fruit d’une reconversion partielle, le bunker ne comprenant pas de réel espace rénové, seule l’annexe 
                    étant équipée afin d’assurer l’accueil d’expositions et d’évènements.<br><br><span class="text-bold">Les quatre premières cellules sont utilisées 
                    lors de spectacle d’arts vivants et de concerts</span>, mais les sept autres cellules ne sont pas reconverties.<br><br>
                    La Mairie assure uniquement la coûteuse mission de gestion et d’entretien du lieu.</p>
                </div>
            </div>
            <div class="columns bloc">
                <div class="column col-6 text-lbsm-left text-justify">
                    <p>Dans l’optique de trouver une fonction à la totalité du bunker et pour <span class="text-bold">dynamiser le secteur des bassins à flot</span>, 
                        différents projets d’aménagement ont été confiés par la <span class="text-bold">Communauté Urbaine de Bordeaux</span>, le Port Autonome de Bordeaux 
                        et la ville de Bordeaux, aux agences d’architecture et d’urbanisme d’Antoine Grumbach en 1998 et de Nicolas Michelin en 2010.<br><br>
                        En succédant à Jacques Chaban-Delmas en 1995,<br><span class="text-bold">Alain Juppé</span> présente l’année suivante un projet urbain visant à rendre 
                        à la ville sa centralité perdue, à <span class="text-bold">assurer le développement vers la Garonne et à reconquérir le patrimoine</span>.</p>
                </div>                    
                <div class="column col-6">
                    <figure class="figure">
                        <img src="./img/photos/page-lbsm/bsm-party.jpg" alt="photo-soiree-bsm" class="img-responsive">
                    </figure>
                </div>
            </div>
            <div class="columns bloc">
                <div class="column col-6">
                    <figure class="figure">
                        <img src="./img/photos/page-lbsm/bsm-evenement.jpg" alt="photo-soiree-bsm" class="img-responsive">
                    </figure>
                </div>
                <div class="column col-6 text-lbsm-right text-justify">
                    <div class="columns">
                        <p>Il est prévu d’y constituer un espace destiné à <span class="text-bold">la mémoire et à l’histoire maritime de la ville</span>,
                                les aménagements prévus visent à mettre en valeur la base sous-marine considérée comme un des éléments importants du quartier,
                                de son histoire, de sa mémoire.<br><br>Dernièrement, à la suite d'un <span class="text-bold">appel d'offres</span>, la ville de Bordeaux a retenu le projet 
                                de <span class="text-bold">Culturespaces</span>, filiale d'Engie (ex-GDF Suez).Le projet pour la base vise à utiliser les potentialités d'un site 
                                hors du commun, le lieu d'exposition déjà en service mais aussi <span class="text-bold">les onze alvéoles à sous-marins</span> de plus de 100 m de 
                                long et de 12 à 20 m de large, séparées par d'épaisses parois de béton, que la ville</p>
                    </div>
                    <div class="columns text-center">
                        <div class="column col-2"><i class="fas fa-quote-left text-2"></i></div>
                        <div class="column col-8 text-bold text-uppercase"><p class="text-4">souhaitait rénover,<br>mettre en valeur et animer</p></div>
                        <div class="column col-2"><i class="fas fa-quote-right text-2"></i></div>
                    </div>
                    <div class="columns">
                        <p>C'est un lieu "extraordinaire, par son histoire, sa configuration architecturale, ses usages", 
                            a indiqué le maire de Bordeaux <br><span class="text-bold">Alain Juppé</span>, en présentant le projet pressenti.</p>
                    </div>
                </div>                    
            </div>
            <div class="columns bloc">
                <div class="column col-6 text-lbsm-left">
                    <div class="columns"><p>Quatre des onze alvéoles seront utilisées au moins dans un premier temps avec</p></div>
                    <div class="text-bold columns text-highlight-number">
                        <div class="column col-3 text-number">2</div>
                        <div class="column col-6 text-uppercase align-number">
                            <div class="column col-12 text-5">spéctacles</div>
                            <div class="column col-12 text-2">monumentaux</div>
                            <div class="column col-12"><p class="text-6">de vidéo immersive</p></div>
                        </div>
                    </div>
                    <div class="columns text-justify">
                        <p>utilisant l’eau des bassins, un espace dédié à des expositions de <span class="text-bold">création numérique</span>,
                            un autre voué à <span class="text-bold">l’histoire du site</span> et sa mise en valeur.</p>
                    </div>
                </div>
                <div class="column col-6">
                    <figure class="figure">
                        <img src="./img/photos/page-lbsm/video-motion.jpg" alt="video-motion-bsm" class="img-responsive">
                    </figure>
                </div>
            </div>
            <div class="columns bloc">
                <p class="colonne-text text-justify">Des passerelles supplémentaires permettraient au public de déambuler plus largement à travers la base.
                        Le contrat d'exploitation porterait sur <span class="text-bold">15 ans</span>, avec <span class="text-bold">7 millions d'euros</span> d'investissements et travaux.<br><br>
                        La ville a fixé un plafond à 15 euros pour l'entrée.<br>Dans ce projet "en devenir", la municipalité entend à terme 
                        ouvrir un appel à <span class="text-bold">manifestation d'intérêt</span>, pour utiliser les autres alvéoles pour l'instant inutilisables pour questions de sécurité,
                        ainsi que le toit "brise-bombes", complexe à aménager.<br><br>Le nouveau complèxe du "<span class="text-bold">Bassin des lumières</span>" 
                        devrait ouvrir au printemps-été 2020.</p>
            </div>
        </div>
        <!-- FIN DE SECTION PROJETS -->

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
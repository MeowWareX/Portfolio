<!DOCTYPE html>
<?php include './functions/translate.php'; ?>
<html lang="<?= __("fr") ?>">
 
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="DevXpress">
    <!-- description -->
    <meta name="description" content="<?= __('Explorez notre Politique de Cookies : Votre guide pour comprendre comment nous utilisons les cookies, assurant la transparence et vous donnant le contrôle de votre expérience en ligne. Découvrez en plus sur les types de cookies que nous utilisons et comment vous pouvez gérer vos préférences. Votre vie privée est importante pour nous – plongez dans les détails dès maintenant.') ?>">
    <!-- keywords -->
    <meta name="keywords" content="<?= __('Utilisation des cookies, Politique en matière de cookies, Cookies et confidentialité, Consentement aux cookies, Technologies de suivi, Cookies web, Collecte de données, Paramètres des cookies, Préférences en matière de cookies, Préférences de confidentialité, Gestion des cookies, Conformité au RGPD, Analyses de site web, Cookies de personnalisation, Cookies tiers, Divulgation des cookies, Options de refus, Bannière de cookies, Avis sur les cookies, Exigences légales.') ?>">
    <!-- Page Title -->
    <title><?= __('DevXpress | Politique de Cookies') ?></title>

    <link rel="icon" href="cookie-policy-content/favicons/logo_devexpress.png">

    <!--css links-->
    <link rel="stylesheet" href="cookie-policy-content/css/bundle.min.css">
    <link rel="stylesheet" href="cookie-policy-content/css/wow.css">
    <link rel="stylesheet" href="cookie-policy-content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="cookie-policy-content/css/line-awesome-vapp.min.css">
    <link rel="stylesheet" href="cookie-policy-content/css/style.css">
    <!--css links
    <link rel="stylesheet" href="realestate/css/style.css">-->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--loader sec start-->
    <div class="loader">
        <div class="box">
            <div class="loader-07"></div>
        </div>
    </div>
    <!--loader sec end-->


    <!--header sec start-->
    <header class="head-sec">
        <div class="container">
            <div class="top-navigation">
                <nav class="navbar navbar-expand-lg nav-up">


                    <a class="navbar-brand" href="#"><img src="cookie-policy-content/favicons/logo_devexpress.png" style="height: 90px;" alt="logo" /></a>

                    <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
                        <ul class="navbar-nav horizontal-nav ml-auto">
                            <?php if ($langue == "en")
                                echo '<li class="nav-item"><a class="nav-link" href="?lang=fr"><div>Fr</div></a></li>' ?>
                            <?php if ($langue == "fr")
                                echo '<li class="nav-item"><a class="nav-link" href="?lang=en"><div>En</div></a></li>' ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="index.php"><?= __("Retour à l'acceuil") ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="navigation-toggle ml-auto d-block d-lg-none">
                        <ul class="slider-social toggle-btn" id="toggle-btn">
                            <li class="animated-wrap">
                                <a class="animated-element" href="javascript:void(0);">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="broad">
                <div class="close-nav">
                    <i class="las la-times"></i>
                </div>
                <nav class="navbar navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php if ($langue == "en")
                                echo '<a class="nav-link scroll" href="?lang=fr"><i class="las la-angle-double-right">Fr</i></a>' ?>
                            <?php if ($langue == "fr")
                                echo '<a class="nav-link scroll" href="?lang=en"><i class="las la-angle-double-right">En</i></a>' ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="index.php"><i class="las la-angle-double-right"></i>
                                <?= __("Retour à l'acceuil") ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--header sec end-->


    <!--Services content start-->
    <div id="services-sec" class="services-sec">
        <div class="container">
            <div class="row services-details text-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <p class="sub-heading text-center">- <?= __('politique de cookies') ?> -</p>
                    <h3 class="heading text-center"><?= __("Politique de Confidentialité") ?></h3>
                    <p class="text-center" style="color: #595959;">
                        <?= __('Cette politique de confidentialité décrit comment nous collectons, ') ?>
                        <?= __('utilisons et partageons vos informations personnelles conformément à la Loi 25 du Québec.') ?></p>
                </div>
            </div>

            <br>
            <br>

            <div class="row text-center about-row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft about-box" style="visibility: visible; animation-name: fadeInLeft;">
                    <span class="flaticon flaticon-idea"></span>
                    <h4 class="heading text-center" style=" font-weight: bold;"><?= __("Collecte d’informations") ?></h4>
                    <br>
                    <p style="color: #595959;"> <?= __("Nous collectons ces informations lorsque vous remplissez un formulaire, effectuez un achat ou") ?>
                        <?= __("entrez des informations sur notre site Web.Nous collectons les informations personnelles suivantes :") ?>
                    </p>
                    <ul class="pl-0 pt-2 left-about wow fadeInUp" style="color: #595959;" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                        <li><?= __("Nom") ?></li>
                        <li><?= __("Adresse e-mail") ?></li>
                        <li><?= __("Numéro de téléphone") ?></li>
                        <li><?= __("Adresse postale") ?></li>
                        <li><?= __("Adresse IP") ?></li>
                        <li><?= __("Informations de géolocalisation") ?></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-12 wow fadeInUp about-box active" style="visibility: visible; animation-name: fadeInUp;">
                    <span class="flaticon flaticon-hook"></span>
                    <h3 class=" m-0 darkcolor"></h3>
                </div>
                <div class="col-md-4 col-sm-12 wow fadeInRight about-box" style="visibility: visible; animation-name: fadeInRight;">
                    <span class="flaticon flaticon-house"></span>
                    <h4 class="heading text-center" style=" font-weight: bold;"><?= __("Utilisation des informations") ?></h4>
                    <br>
                    <p style="color: #595959;"><?= __("Nous utilisons les informations personnelles que nous collectons pour :") ?></p>
                    <br>
                    <ul class="pl-0 pt-2 left-about wow fadeInUp" style="color: #595959;" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                        <li><?= __("Personnaliser votre expérience et répondre à vos besoins individuels") ?></li>
                        <li><?= __("Fournir un service clientèle personnalisé") ?></li>
                        <li><?= __("Traiter les transactions") ?></li>
                        <li><?= __("Envoyer des courriels périodiques concernant votre commande ou d’autres produits et services") ?>
                        </li>
                    </ul>
                </div>
            </div>




            <div class="row our-services">
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInLeft" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/data.ico"></i>
                            </div>
                            <h3 class="service-card-heading"><?= __("Responsable des données personnelles") ?></h3>
                            <p class="service-card-detail">
                                <?= __("Le responsable des données personnelles est Laurent Généreux, que vous pouvez joindre à") ?>
                                <?= __("l’adresse e-mail suivante : laurent@devxpress.ca.") ?>
                            </p>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInRight" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/partage.ico"></i>
                            </div>
                            <h3 class="service-card-heading"><?= __("Partage des informations") ?></h3>
                            <p class="service-card-detail">
                                <?= __("Nous ne vendons, n’échangeons ni ne transférons vos informations personnelles à des") ?>
                                <?= __("tiers, sauf si nous avons votre autorisation expresse ou si la loi l’exige.") ?>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInLeft" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/protection.ico"></i>
                            </div>
                            <h3 class="service-card-heading"><?= __("Protection des informations") ?></h3>
                            <p class="service-card-detail">
                                <?= __("Nous mettons en œuvre une variété de mesures de sécurité pour protéger la sécurité de") ?>
                                <?= __("vos informations personnelles. Nous utilisons un cryptage de pointe pour protéger les") ?>
                                <?= __("informations sensibles transmises en ligne.") ?>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInRight" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/cookie.ico"></i>
                            </div>
                            <h3 class="service-card-heading">Cookies</h3>
                            <p class="service-card-detail">
                                <?= __("Nous utilisons des cookies pour nous aider à enregistrer vos préférences pour les") ?>
                                <?= __("visites futures et à compiler des données agrégées sur le trafic et l'interaction sur le") ?>
                                <?= __("site afin d'offrir de meilleures expériences et outils à l'avenir.") ?>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInLeft" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/droit.ico"></i>
                            </div>
                            <h3 class="service-card-heading"><?= __("Droits des utilisateurs") ?></h3>
                            <p class="service-card-detail">
                                <?= __("Conformément à la Loi 25, vous avez le droit d'accéder à vos données personnelles, de les corriger et de demander leur suppression.") ?>
                                <?= __("Pour exercer ces droits, veuillez nous contacter à l’adresse ci-dessous.") ?>

                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 s-cards">
                    <div class="service-card text-center wow fadeInRight" data-wow-duration="1s">
                        <a>
                            <div class="image-holder">
                                <i class="icon-featured"><img src="cookie-policy-content/favicons/check.ico"></i>
                            </div>
                            <h3 class="service-card-heading"><?= __("Consentement") ?></h3>
                            <p class="service-card-detail">
                                <?= __("En utilisant notre site, vous consentez à notre politique de confidentialité.") ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <div class="row services-details text-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <h3 class="heading text-center"><?= __("Modifications de la politique de confidentialité") ?></h3>
                    <p class="detail-text text-center" style="color: #595959;"><?= __("Si nous décidons de modifier notre politique de confidentialité,") ?>
                        <?= __("nous publierons ces modifications sur cette page et mettrons à jour la date de la dernière modification.") ?>
                        <?= __("Dernière mise à jour : 3 novembre 2023") ?>
                        <?= __("Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité,") ?>
                        <?= __("veuillez nous contacter à l’adresse e-mail suivante : loi25@devxpress.ca.") ?></p>
                </div>
            </div>


        </div>


    </div>
    <!--Services content end-->








    <!--footer sec start-->
    <footer class="footer-sec" id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="footer-icons d-flex">
                        <!--footer sec start
                        <a href="javascript:void(0)" class="wow fadeInUp"><i class="lab la-facebook-f"></i> </a>
                        <a href="javascript:void(0)" class="wow fadeInDown"><i class="lab la-twitter"></i> </a>
                        <a href="javascript:void(0)" class="wow fadeInUp"><i class="lab la-google"></i> </a>
                        <a href="javascript:void(0)" class="wow fadeInDown"><i class="lab la-linkedin-in"></i> </a>
                        <a href="javascript:void(0)" class="wow fadeInUp"><i class="lab la-instagram"></i> </a>
                        <a href="javascript:void(0)" class="wow fadeInDown"><i class="las la-envelope"></i> </a>-->
                    </div>
                    <div class="col-auto">
                        <p class="text-3-5"><a href="https://devxpress.ca/">DevXpress</a></p>


                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer sec end-->


    <script src="cookie-policy-content/js/bundle.min.js"></script>
    <script src="cookie-policy-content/js/owl.carousel.min.js"></script>
    <script src="cookie-policy-content/js/wow.min.js"></script>
    <script src="cookie-policy-content/js/parallaxie.min.js"></script>
    <!--counter js links-->
    <script src="cookie-policy-content/js/script.js"></script>
</body>

</html>
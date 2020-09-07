<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">

    <title>BOUXIN Cyril - Bienvenue sur mon CV</title>
    <meta name="description" content="Bienvenue sur le CV en ligne de Bouxin Cyril, je suis étudiant en développement web au sein du centre de formation Valarep sur Valenciennes, je suis à la recherche d'une entreprise pour effectuer mon stage. J'étudie le HTML, CSS, JAVASCRIPT, PHP, BOOTSTRAP. Vous retrouverez également mon CV au format .pdf directement telechargable via ce site.">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">A PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">FORMATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">EXPERIENCES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item"></li>
                    <a class=" nav-link popup" href="#scrollentreprise" onclick="showPopup() ">IMMERSION EN ENTREPRISE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="popup" id="scrollentreprise">
        <div class="full-screen hidden flex-container-center p-5">
            <h1>PERIODE D'IMMERSION EN ENTREPRISE</h1>
            <p>Je suis à la recherche d'une entreprise ayant la possibilité de m'accueillir durant 6 semaines dans le but d'acquérir d'avantage de connaissances à vos côtés et de réaliser mon premier projet professionnel.</p>
            <p>Cette période se déroule du <strong>Samedi 3 Octobre 2020</strong> au <strong>Vendredi 13 Novembre 2020.</strong>
                <br>Vous pouvez me contacter via le formulaire disponible à la fin du CV.</p>
            <button type="button" class="nav-link btn-cv btn btn-light btn-lg mt-5" onclick="closePopup()">Revenir au CV</button>
        </div>
    </div>
    <banner class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark " style="height:100vh; background-size: cover; background-image: url(img/banner.png); ">

        <div class="container-fluid ">
            <div class="row justify-content-center align-items-center d-flex text-center h-100 ">
                <div class="col-12 col-md-8 h-50 ">
                    <h1 class="display-2 text-light mb-2 mt-5 "><strong>Bouxin Cyril</strong> </h1>
                    <p class="lead text-light mb-5 ">Etudiant en Développement Web & Web mobile.</p>
                    <button class="button " type="button " data-hover="Version .PDF " data-active="Telechargement... "><span class="m-auto "><a href="download/CV_BOUXIN.pdf " target="_blank"> Telechargez mon CV !</a></span></button>

                </div>
            </div>

        </div>
        </div>
    </banner>
    <main>

        <div class="container-fluid spad ">
            <div class="row ">
                <div class="col-xl-8 offset-xl-2 ">

                    <div class="section-title ">
                        <h2 id="about">A PROPOS</h2>
                    </div>
                    <center>
                        <img class="img_cyril rounded-circle m-2 " src="img/cyril.jpg " alt="Photo de profil de Cyril Bouxin "></a>
                        <div class="skill ">
                            <img class="img_skill m-md-2 " src="img/lang/HTML5.png " alt="logo html ">
                            <img class="img_skill m-md-2 " src="img/lang/CSS3.png " alt="logo css3 ">
                            <img class="img_skill m-md-2 " src="img/lang/BOOTSTRAP.png " alt="logo bootstrap ">
                            <img class="img_skill m-md-2 " src="img/lang/javascript.png " alt="logo javascript ">
                            <img class="img_skill m-md-2 " src="img/lang/ILLUSTRATOR.png " alt="logo illustrator ">
                            <img class="img_skill m-md-2 " src="img/lang/PHOTOSHOP.png " alt="logo photoshop ">
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container hero col-xl-10 offset-xl-1 shadow p-md-1 ">
            <p>Moi c'est Cyril, j'ai 24 ans et je suis étudiant en Développement Web au sein du centre de formation Valarep Valenciennes. J'ai toujours été fasciné par les nouvelles technologies et l'informatique, j'ai donc décidé de faire de cette passion
                mon métier. J'apprend actuellement le HTML/CSS, le javascript ainsi que le framework Bootstrap avec lequel j'ai réalisé ce CV en ligne.</p>
        </div>

        <section class="resume-section spad ">
            <div id="education" class="container-fluid ">
                <div class="row ">
                    <div class="col-xl-7 offset-xl-2 ">
                        <div class="section-title ">
                            <h2>FORMATIONS</h2>
                        </div>
                        <ul class="resume-list ">
                            <li>
                                <h2>2020-2021</h2>
                                <h3>Valarep</h3>
                                <h4>Développement Web & Web Mobile</h4>
                                <p>Après quelques temps de eLearning, je décide de me former en parallèle via un centre de formation proche de chez moi, me permettant ainsi d’avoir un soutien physique dans mon apprentissage. </p>
                            </li>
                            <li>
                                <h2>2018-2019</h2>
                                <h3>Université Sorbonne Nouvelle</h3>
                                <h4>DAEU Option A Littéraire</h4>
                                <p>N’ayant pas saisi l’opportunité de passer mon Bac durant ma jeunesse, je décide de passer un diplôme équivalent au sein de l'université Sorbonne Nouvelle. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="resume-section with-bg spad ">
            <div id="experience" class="container-fluid ">
                <div class="row ">
                    <div class="bg col-xl-7 offset-xl-2 ">
                        <div class="section-title ">
                            <h2>EXPERIENCES</h2>
                        </div>
                        <ul class="resume-list ">
                            <li>
                                <h2>2020</h2>
                                <h3>Jules Petite-Forêt</h3>
                                <h4>Vendeur polyvalent - CDD</h4>
                                <p>Dans l'attente d'une possible reconversion professionnelle, l'enseigne Jules m'a de nouveau intégré en contrat à durée déterminé. </p>
                            </li>
                            <li>
                                <h2>2016-2018</h2>
                                <h3>Jules Bastille</h3>
                                <h4>Vendeur polyvalent - CDI</h4>
                                <p>En 2016, je pars sur Paris dans le but de trouver du travail. Le mois qui suit, j'intègre la boutique Jules Bastille en CDD, puis CDI. S'en suit deux belles années au sein de cette boutique. Je décide finalement de rompre
                                    mon contrat, ne voyant pas mon avenir dans le domaine du commerce. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section spad ">
            <div id="contact" class="container-fluid ">
                <div class="row ">
                    <div class="col-xl-8 offset-xl-2 ">
                        <div class="section-title ">
                            <h2>CONTACT</h2>
                        </div>
                        <p> ( Je recherche une entreprise afin d'y effectuer une période d'immersion,<a class="popup" href="#scrollentreprise" onclick="showPopup() "> cliquez ici</a> pour en savoir plus ! )</p>
                        <form class="contact-form" method="post" action="#contact">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <label for="nom">Votre nom</label>
                                    <input type="text" name="nom" id="nom" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="email">Votre adresse mail</label>
                                    <input type="email" name="email"id="email" placeholder="Adresse mail" required>
                                </div>
                                <div class="col-md-12 ">
                                    <label for="message">Votre message</label>
                                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="text-md-right ">
                                <button type="submit " class="btn btn-light ">Envoyer</button>
                            </div>
                        </form>
                        <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('bouxin.cyril@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<div class="alert alert-success" role="alert">
  Le message à bien été envoyé, merci !
</div>';
        }
    }
    ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-fluid p-md-3">
            <div class="row">
                <div class="col-md-5 offset-1">Copyright – Tous les textes et photos, sauf indication contraire, sont sujets aux lois de la protection intellectuelle et sont la propriété de © Cyril Bouxin. Aucune photographie ne peut être reproduite, copiée, dérivée ou utilisée en
                    partie ou en intégralité, sans permission écrite du propriétaire. tous droits réservés.</div>
                <div class="col-md-5 offset-1">
                    <strong> Informations complémentaires</strong>
                    <ul>
                        <li>Mail : bouxin.cyril@gmail.com</li>
                        <li>Tel : 06 95 78 66 91</li>
                        <li>Site Web : bouxin-cyril.fr</li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js "></script>
</body>

</html>
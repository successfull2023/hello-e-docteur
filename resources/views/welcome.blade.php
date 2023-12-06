<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 avenue de la bonne santé Ouagadougou Burkina faso</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>ouvert tous les jours :07 h-22 h</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>0022661415820</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Hallo e docteur</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#index" class="nav-item nav-link active">Accueil</a>
                <a href="#about" class="nav-item nav-link">A propos</a>
                <a href="#service" class="nav-item nav-link">Nos services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="#feature" class="dropdown-item">Fonctionnalité</a>
                        <a href="#team" class="dropdown-item">Nos médecins</a>
                        <a href="#appointment" class="dropdown-item">Rendez-vous</a>
                        <a href="#testimonial" class="dropdown-item">Temoignages</a>
                    </div>
                </div>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Se
                connecter<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Une bonne santé est la racine de tout bonheur</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Médecins experts</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Trucs médicaux</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Nombre total de patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/apropos.2.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiologie</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/caroussel.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurologie</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('img/apropos.png') }}" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pneumologie</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <section id="about">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('img/apropos.3.png') }}"
                                alt="">
                            <img class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                                src="{{ asset('img/apropos.4.png') }}" alt="" style="margin-top: -25%;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">A propos</p>
                        <h1 class="mb-4">Pourquoi devriez-vous nous faire confiance ? Faites-nous connaître !</h1>
                        <p>La santé est l’une des choses les plus précieuses que nous ayons. Année après année, les
                            besoins de santé ne cessent d’augmenter. Nous sommes de plus en plus nombreux et l’espérance
                            de vie continue de croître. En parallèle, nous assistons à l’essor de maladies de tous types
                            : maladies chroniques, troubles mentaux, blessures traumatiques ou encore pandémies. La
                            majorité des pays investissent de plus en plus dans la santé pour répondre à ces défis et
                            mieux soigner leur population. </p>
                        <p class="mb-4">Les soignants travaillent quant à eux sans relâche pour s’occuper de leurs
                            patients. Une mission qui devient de plus en plus difficile alors que les professionnels de
                            santé ne sont pas assez nombreux pour traiter le nombre croissant de demandes de soins.
                            Souvent, ils sont isolés ou répartis de manière inégale au sein des territoires.</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Des soins de santé de qualité</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Uniquement des médecins qualifiés</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Professionnels de la recherche médicale
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>



    <!-- Service Start -->
    <section id="service">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Nos prestations de service</p>
                    <h1>Solutions de soins de santé</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-heartbeat text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Cardiologie</h4>
                            <p class="mb-4">Le cardiologue ne compte pas ses heures et ses journées sont souvent très
                                chargées. Il peut être contraint à des astreintes la nuit ou les weekends et doit être
                                disponible en cas d'urgence. Il travaille souvent en collaboration avec d'autres
                                professionnels de la santé.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-x-ray text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Pneumologie</h4>
                            <p class="mb-4">Dans le cadre de sa mission de proximité, le service de pneumologie prend
                                en charge l'ensemble des maladies respiratoires de l'adulte : maladies des bronches, du
                                poumon, de la plèvre ou des vaisseaux pulmonaires. Il est spécialisé dans la prise en
                                charge du diagnostic et du traitement du cancer du poumon.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-brain text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Neurologie</h4>
                            <p class="mb-4">e service de neurologie est un service de neurologie générale et experte
                                qui prend en charge l’ensemble des pathologies du système nerveux central et
                                périphérique.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-wheelchair text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Orthopedie</h4>
                            <p class="mb-4">La prise en charge diagnostique, thérapeutique et préventive de toutes
                                les pathologies de l’appareil locomoteur nécessite de faire preuve d’empathie à l’égard
                                du patient. Chaque professionnel contribue, écoute, informe et accompagne le patient
                                tout au long de son parcours thérapeutique. En interdisciplinarité, ce travail assure au
                                «patient-acteur» les meilleures synergies possibles.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-tooth text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Chirurgie dentaire</h4>
                            <p class="mb-4">préserver sa dentition est primordial : de mauvaises habitudes ou
                                l'absence de soins dentaires peuvent avoir des répercussions sur l’état de santé général
                                et sur le sourire, empoisonnant le quotidien. Hygiène dentaire, soins, chirurgie,
                                orthodontie, prothèses dentaires, implants dentaires, pédodontie … tous les sujets
                                touchant à la dentisterie sont abordés pour aider les internautes à prendre soin de
                                leurs dents.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-vials text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Laboratoire</h4>
                            <p class="mb-4">Le responsable de la planification doit être sûr à 100 % que les bons
                                instruments sont disponibles à l'instant T pour exécuter un travail sans interruption.
                                Cette bonne coordination est également primordiale pour garantir une justesse et une
                                fiabilité des analyses.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>En savoir
                                plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    </section>



    <!-- Feature Start -->
    <section id="feature">
        <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
            <div class="container feature px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-lg-5 ps-lg-0">
                            <p class="d-inline-block border rounded-pill text-light py-1 px-4">Caractéristiques</p>
                            <h1 class="text-white mb-4">Pourquoi nous choisir</h1>
                            <p class="text-white mb-4 pb-2">Nous sommes accessibles (nous répondons facilement aux
                                questions que vous nous posez, expliquons ce qui se passe), nous vous laissons exprimer
                                ce qui vous préocupe et cherchons des solutions pour vous donner des soins adaptés à
                                votre cas. </p>
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-user-md text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Expérimentés</p>
                                            <h5 class="text-white mb-0">médecins</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-check text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Qualité</p>
                                            <h5 class="text-white mb-0">Nos prestations de service</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-comment-medical text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Positives</p>
                                            <h5 class="text-white mb-0">Consultations</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-headphones text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">24 Hours</p>
                                            <h5 class="text-white mb-0">soutient</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100"
                                src="{{ asset('img/features.1.png') }}" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
    </section>



    <!-- Team Start -->
    <section id="team">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Medecins</p>
                    <h1>Nos medecins experimentés</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/apropos.4.png') }}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Dr MABOUNDOU STEVE FAVOR</h5>
                                <p class="text-primary">Neuro-chirurgien</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/doc.1.png') }}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Dr NGUILA TEDDY ARMEL</h5>
                                <p class="text-primary">Cardiologue</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/doc10.png') }}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Dr KPANDJOM SARA HELENA</h5>
                                <p class="text-primary">Gynecologue</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative rounded overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/doc5.png') }}" alt="">
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Dr MABOUNDOU YVANA HANANIELLE</h5>
                                <p class="text-primary">Radiologue</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    </section>

    <!-- Appointment Start -->
    <section id="appointment">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Rendez-vous</p>
                        <h1 class="mb-4">Prenez rendez-vous pour consulter nos médecins</h1>
                        <p class="mb-4">Grâce à nos 13 années d’expertise en secrétariat téléphonique médical nous
                            avons conçu un service de prise de rendez-vous en ligne sur mesure selon votre cahier des
                            charges aussi complexe soit-il. Vous ne changez pas vos habitudes, le service Docteur
                            rendez-vous améliore l’accès des patients à la prise de rendez-vous mais ne modifie pas vos
                            habitudes de fonctionnement.</p>

                        <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Contactez-nous maintenant</p>
                                <h5 class="mb-0">0022661415820</h5>
                            </div>
                        </div>
                        <div class="bg-light rounded d-flex align-items-center p-5">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Envoyez-nous un email</p>
                                <h5 class="mb-0">Halloedocteur@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Votre nom"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Votre Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0"
                                            placeholder="Votre telephone" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Choisissez un medecin</option>
                                            <option value="1">Dr Maboundou steve favor</option>
                                            <option value="2">Dr kpandjom sara helena</option>
                                            <option value="3">Dr Maboundou yvana hananielle</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input"
                                                placeholder="Choisissez une date" data-target="#date"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input"
                                                placeholder="Choisissez une heure" data-target="#time"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" rows="5" placeholder="Decrivez-votre probleme"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Prendre
                                            rendez-vous</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
    </section>



    <!-- Testimonial Start -->
    <section id="testimonial">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Temoignages</p>
                    <h1>Ce que disent nos patients!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                            src="{{ asset('img/temoignage.3.png') }}" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>J’ai eu une prise en charge au top. Le personnel du 3ème étage et celui du bloc opératoire
                                ont été formidables. L’équipe du bloc a été exceptionnelle, très proche du patient, et très
                                professionnelle. Merci à tous.</p>
                            <h5 class="mb-1">Mr Maboundou guy andre yvon</h5>
                            <span class="fst-italic">Professeur des ecoles</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                            src="{{ asset('img/temoignage.2png') }}" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>Équipe soignante très aidante. Beaucoup de bienveillance qui se ressent tout autant entre les
                                patients.</p>
                            <h5 class="mb-1">Mme Ronan alice</h5>
                            <span class="fst-italic">Pasteur</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                            src="{{ asset('img/temoignage.1.png') }}" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>Excellente prise en charge à mon arrivée aux urgences, suivi d’une hospitalisation avec une
                                opération chirurgicale. Personnel soignant de la chirurgie très professionnel et
                                sympathique, toujours à notre écoute et en fonction de nos besoins. Très bonne restauration
                                : frais et variés. Merci au Dr-Maboundou steve favor (neuro-chirurgien) pour son
                                intervention sur ma personne, ainsi qu’à tout le personnel soignant. Je recommande ce centre
                                hospitalier.</p>
                            <h5 class="mb-1">Mme Ngakosso claire</h5>
                            <span class="fst-italic">Femme d'affaire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </section>


    <!-- Contact Start -->
    <section id="contact">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Notre adresse</p>
                                <h5 class="mb-0">123 avenue de la bonne santé Ouagadougou Burkina faso</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Contactez-nous maintenant</p>
                                <h5 class="mb-0">0022661415820</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Envoyez-nous un email</p>
                                <h5 class="mb-0">Helloedocteur@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded p-5">
                            <p class="d-inline-block border rounded-pill py-1 px-4">Contactez-nous</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Votre nom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Votre Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Sujet</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Votre Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Envoyez votre message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.0959791644264!2d-1.503050926161628!3d12.376502827648446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1701783144062!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    {{-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="" style="width: 1000px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18
                            !1m12!1m3!1d3897.0959791644264!2d-1.503050926161628!3d12.376502827648446!2m3!1f0!2
                            f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCamp
                            us%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sb
                            f!4v1701783144062!5m2!1sfr!2sbf" frameborder="0" allowfullscreen="" aria-hidden="false"
                            tabindex="0" ></iframe>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Contact End -->

    </section>




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Notre adresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 avenue de la bonne santé
                        Ouagadougou Burkina faso</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0022661415820</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>halloedocteur@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Nos differents Services</h5>
                    <a class="btn btn-link" href="">Cardiologie</a>
                    <a class="btn btn-link" href="">Pneomologie</a>
                    <a class="btn btn-link" href="">Neurologie</a>
                    <a class="btn btn-link" href="">Orthopedie</a>
                    <a class="btn btn-link" href="">Laboratoire</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Liens rapides</h5>
                    <a class="btn btn-link" href="">A propos de nous</a>
                    <a class="btn btn-link" href="">Contactez-nous</a>
                    <a class="btn btn-link" href=""> Nos services</a>
                    <a class="btn btn-link" href="">Termes et Conditions</a>
                    <a class="btn btn-link" href="">Nous soutenir</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Abonnez-vous à notre newsletter.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Votre email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">HALLO E DOCTEUR</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

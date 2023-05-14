<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?=asset('css/admin.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/style.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/style1.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/stylec.css')?>" />
    <link rel="stylesheet" href="<?=asset('vendor/bootsrap/css/bootstrap.min.css')?>" />

    <link href="<?=asset('vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

</head>
<body>

<header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="index.php">Remar</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="index.php"> PÁGINA INICIAL</a></li>
                    <li><a href="sobre.php">QUEM SOMOS</a></li>
                    <!-- <li><a href="doacao.php">DOAÇÕES</a></li> -->
                        <li class="dropdown"><a href="#"><span>VER NECESSIDADES</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Tipos de Necessidades</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Finaceira</a></li>
                                        <li><a href="#">Alimental</a></li>
                                        <li><a href="#">Materias</a></li>
                                        <li><a href="#">Saúde</a></li>
                                        <li><a href="#">Formação</a></li>
                                        <li><a href="#">Vestuario</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Ver Todas</a></li>
                            </ul>
                        </li>
                        <a class="getstarted" href="<?=BASE_URL?>login">logar</a>
                        <a class="getstarted" href="#" data-bs-toggle="modal" data-bs-target="#modalCadastra">Regista-se</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    <script src="<?=asset('vendor/purecounter/purecounter_vanilla.js')?>"></script>
    <script src="<?=asset('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=asset('vendor/glightbox/js/glightbox.min.js')?>"></script>
    <script src="<?=asset('vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
    <script src="<?=asset('vendor/swiper/swiper-bundle.min.js')?>"></script>
    <script src="<?=asset('vendor/waypoints/noframework.waypoints.js')?>"></script>
    <script src="<?=asset('vendor/php-email-form/validate.js')?>"></script>
    <!-- JS File -->
    <script src="<?=asset('js/main.js')?>"></script>
    <script src="<?=asset('js/actions.js')?>"></script>
    <script src="<?asset('js/main.js')?>')?>"></script>
    <script src="<?asset('vendor/bootstrap/js/bootstrap.min.js')?>"></script>
</header> 
</body>
</html>
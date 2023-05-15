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
                        <a class="getstarted" href="<?=BASE_URL?>registo">Regista-se</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header> 
<main>
     <!-- ======= Doações realizadas ======= -->
        <section id="titulos" class="titulos">
            <h2 style="text-align: center;">O que o seu Donativo pode fazer aos outros!</h2>
            <h5 style="text-align: center;">Vem ajudar como o que pode ou seja um voluntário</h5>
        </section>
        <section id="realizada" class="realizada">
            <div class="container">
                <div class="row" role="listbox">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="doacao">
                            <img src="public/assets/img/team/2.jpg" alt="">
                            <span>voluntários oferecem ajuda médica</span>
                            <p>
                                Uma comunidades recebe ajuda de voluntário medico da Remar
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch"> 
                        <div class="doacao">
                            <img src="public/assets/img/team/afrianos.jpg" alt="">
                            <span>voluntários da remar leciona em comunidades desfavorecida</span>
                            <p>
                                Professores Jovem senti-se motivado a ajudar o proximo, ensinado a que mais necessita
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="doacao">
                            <img src="public/assets/img/portfolio/portfolio-1.jpg" alt="">
                            <h4>Doador</h4>
                            <span>Desponivel para doar sem beniciario</span>
                            <p>
                                Doador doar conjuntos de produtos para Higine pessoal
                            </p>
                            <a href="doacaoD.php" class="btn-get-started animate__animated animate__fadeInUp">Saiba Mais</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Doações realizadas -->

        <!-- ======= Quem somos ======= -->
        <section id="Sobre" class="Sobre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="public/assets/img/slide/remarSobre.jpg" class="img-fluid" alt=""> <br>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Porque usar o site <em>remar</em> para doar?</h3>
                        <p class="fst-italic">
                            As ONG`S encontram muitas dificuldades no se refere a recolha de doações, isso porque na maioria das vezes os doadores particulares vivem distantes do local de entrega dos donativos e também pela falta de informação um doador pode doar bens que na verdade
                            não é o que se precisa num momento, a dificuldade que muitos voluntários tem caso queriam fazer parte de uma ONG´s, pensando em sí que quero ajuda e aquem precisa de ajuda trouxemos atocê o <strong><a href="sobre.php">remar</a></strong>
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Oferecimento um serio comprimisso com os doadores e as Organizações.</li>
                            <li><i class="bi bi-check-circle"></i> facilitando a maior gestão de bens doado e a sua distribuição.</li>
                            <li><i class="bi bi-check-circle"></i> Somos a maior plataforma de ONG´s de Angola e com Organizações legalizadas e independente</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- fim Quem Somos -->
        
        <!-- ======= sessão das necessidades ======= -->
        <section id="necessidades" class="necessidades">
            <div class="container">
                <section id="featured">
                    <h2 class="featured" style="text-align: center;">O voce também podes ajudar!</h2>
                    <h5 style="text-align: center;">NECESSIDADES</h5>
                </section>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">ALIMENTOS</a></h4>
                            <p>Precisa-se alguns conjunto da cesta basica para o acolhimento na funda da Remar</p> <br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">FINANCEIRA</a></h4>
                            <p>Precisa-se de medicamento para tratamento de paludismo</p> <br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">VESTUARIO</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> <br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Doar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Saúde</a></h4>
                            <p>Precisa-se de volutario medico para ajudar com uma comunidade desfavorecida </p><br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Ajudar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">FINANCEIRA</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p><br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Ajudar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">MATERIAS</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p><br>
                            <a href="" class="getstarted" data-bs-toggle="modal" data-bs-target="#doarlogin">Ajudar</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- fim necessidades -->
        
        <footer id="footer">
        <div class="footer-top">
            <div style="margin:0px auto;" class="container">
                <div class="row">
                    <h3 style="text-align: center; padding: -10px; position: relative;">Fale Connosco</h3><br><br>
                    <div style="margin: 0px auto;" class="col-lg-3 col-md-6 footer-contact">
                        <p>
                            Luanda,Viana Rua xxx Nº xxx
                            <strong>Telefone:</strong> +244 920 000 000 
                            <strong>Email:</strong> RemarAO@gmail.com<br>
                            <strong><i class="bx bx-chevron-right"></i><a href="EntreCon.php">Entre em Contacto</a></strong>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div> 

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Remar</span></strong>. Todos os direitos reservados
            </div>
            <div class="credits">
                Credito <a href="#"><span> Gilberto & Telma</span></a>
            </div>
        </div>
    </footer>

  <!-- ^modal para Doadorlogin -->
<div class="modal fade" id="doarlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Faça o login 
                                        Ou cria a sua conta </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="user" role="form" method="post">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ensira o teu Email">
                    </div>
                    <div class="form-group">
                        <input name="senha" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                        <input type="submit"  name="logar" value="Login" class=" btn-primary btn-user btn-block">
                    </div>
                </form>
                <div class="text-center">
                    <a class="getstarted" href="#" data-bs-toggle="modal" data-bs-target="#modalCadastra">Regista-se</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  fim modal para doarlogin -->

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
    <script src="<?=asset('js/main.js')?>')?>"></script>
    <script src="<?asset('vendor/bootstrap/js/bootstrap.min.js')?>"></script>
</main>

</body>
    
</html>
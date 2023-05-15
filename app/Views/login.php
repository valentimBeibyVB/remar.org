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
    <!-- <link rel="stylesheet" href="<?=asset('css/style.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/style1.css')?>" />
    <link rel="stylesheet" href="<?=asset('css/stylec.css')?>" /> -->
    <link rel="stylesheet" href="<?=asset('vendor/bootsrap/css/bootstrap.min.css')?>" />

    <link href="<?=asset('vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
  <link href="<?=asset('vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 .d-lg-block"><img src="<?=asset('img/slide/remar2.jpg')?>" width="100%"  alt="Logo da remar"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Seja Bem-Vindo! <br> á Remar
                                        </h1>
                                    </div>
                                    <form  class="user" action="" method="post">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ensira o teu Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="senha" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <input type="submit"  name="logar" value="Login" class="btn btn-primary btn-user btn-block">
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
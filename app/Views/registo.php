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
<body class="bg-gradient">

<div class="container">

<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <!-- <div class="col-lg-6 .d-lg-block"><img src="img/remar2.jpg"  width="100%" alt="Logo da remar"></div> -->
                    <div class="col-lg-12">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Dados de usuario</h1>
                            </div>
                            <form class="user" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                                    placeholder="Nome">
                                            </div>
                                            <div class="col-sm-6" class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="email"
                                                placeholder="Email">
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                    name="senha" id="exampleInputPassword" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Dados Pessoais</h1>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="nome" class="form-control form-control-user"
                                                    name="nomeC" id="exampleInputPassword" placeholder="Nome completo">
                                            </div>   
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="BI" id="BI"
                                                    placeholder="Número do Bilhete">
                                            </div>                                 
                                        </div>
                                            
                                        <div class="form-group row">
                                            
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="Telefone" class="form-control form-control-user"
                                                    name="Telefone" id="exampleInputPassword" placeholder="Telefone">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="Enderenço" class="form-control form-control-user" name="Endereco" id="Enderenço"
                                                    placeholder="Enderenço">
                                            </div>
                                        </div>
                                        <input type="submit"  class="btn btn-primary btn-user btn-block" value="Criar Usuario">           
                                        <hr>
                    
                                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="logar.php">Já Tenho uma conta!</a>
                    </div>
                    <div class="text-center">
                                <a  href="index.php">Voltar a página inicial</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    
    <?php 
    require_once 'layout/linkCss.php';
    ?>

</head>
<body class="bg-gradient">
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
                                    <form  class="user" action="<?= BASE_URL?>login" method="post" id="login">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Ensira o teu Email">
                                                <span id="errorE" class="invalid-feedback"></span>
                                        </div>
                                        <div class="form-group">
                                            <input name="senha" type="password" class="form-control form-control-user"
                                                id="senha" placeholder="Password">
                                                <span id="errorS" class="invalid-feedback"></span>
                                        </div>
                                        <!-- <input type="submit"  name="logar" value="Login" class="btn btn-primary btn-user btn-block"> -->
                                        <button type="submit" name="logar" class="btn btn-primary btn-user btn-block">Login</button>
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
                                        <a class="getstarted" href="forgot-password.html">Esqueceu a senha?</a>
                                        <a class="getstarted" href="<?=BASE_URL?>registo">Regista-se</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const form=document.querySelector("#logi");
        const email=document.querySelector("#email");
        const senha=document.querySelector("#senha");
        const errorE=document.querySelector("#errorE");
        const errorS=document.querySelector("#errorS");
        form.addEventListener("submit",(e)=>{
            e.preventDefault()
            if(email.value=="" || senha.value==""){
                if(email.value==""){
                    email.classList.remove("is-valid")
                    email.classList.add("is-invalid")
                    errorE.innerHTML="";
                    errorE.innerHTML+="Preencha o email";
                }else{
                    email.classList.remove("is-invalid")
                    email.classList.add("is-valid")
                    errorE.innerHTML="";
                    
                }
                if(senha.value==""){
                    senha.classList.remove("is-valid")
                    senha.classList.add("is-invalid")
                    errorS.innerHTML="";
                    errorS.innerHTML+="Preencha a senha";
                }else{
                    senha.classList.remove("is-invalid")
                    senha.classList.add("is-valid")
                    errorS.innerHTML="";
                }
            }else{
                
            }
        })
    </script>
</body>
</html>
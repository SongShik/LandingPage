<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Landing page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
  <body>
    <?php include 'db.php'; ?>

    <div class="fundo-principal text-center text-white">
        <div class="container ">
            <div class=" p-4">
                <a href="#" class="mr-md-4 ml-md-4 mr-3 ml-3 ">SEÇÃO UM</a>
                <a href="#" class="mr-md-4 ml-md-4 mr-3 ml-3 ">SEÇÃO DOIS</a>
                <a href="#" class="mr-md-4 ml-md-4 mr-3 ml-3 ">SEÇÃO TRÊS</a>
            </div>      
            <img src="assets/img/Logo.png" class="img-fluid p-4 " alt="logo principal">
            <h1 class="display-4 font-weight-bold p-3 titulo "> LOREM IPSUM</h1>
            <p class=" p-2 ">Sed ut perspiciatis unde ommis iste nstus error sit voluptatem <br>accusantium doloremque laudanrium.</p>
            <div class="d-flex  flex-xl-row justify-content-center pb-50 mt-5">
                <a href="#" class="btn mr-5 btn-principal" >LOREM IPSUM</a>
                <a href="#" class="btn  btn-principal" >LOREM IPSUM</a>
            </div>
        </div>
    </div>     

    <div class="container mt-5 mb-5 text-center ">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-8">
                <div class="owl-carousel owl-carousel owl-theme" >
                    <div> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    <div> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    <div> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    <div> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                </div>  
            </div>
            <div class="col"></div>
        </div>
    </div>

    <section class="fundo-formulario container-fluid ">
        <div class="row ">
            <div class="col-md-6 "> 
            <form action="resultado-formulario.php" method="post" id="formulario-landingpage" class="formulario pt-5 pr-md-5 pl-md-5 ml-md-5">
                <h1 class="contato">CONTATO</h1>
                <div class="form-group mt-5">
                    <input type="text" name="nome" id="nome" class="input" placeholder="Nome" >
                </div>
                <div class="form-group mt-4">
                    <input type="number" name="telefone" id="telefone" class="input" placeholder="Telefone" >
                </div>
                <div class="form-group mt-4">
                    <input type="email" name="email" id="email" class="input" placeholder="E-mail" required >
                </div>
                <div class="form-group mt-4">
                <select class="input" id="assunto" name="assunto">
                    <?php 
                        foreach($result as $value){?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['nome'];?> 
                        </option>
                    <?php }?>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <textarea class="input" name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
                </div>
                    <button class="btn-form" type="submit">ENVIAR</button>       
            </form>
            </div>
            <div class="fundo-formulario-img col-md-6 "></div>
    </div>
    </section>

    <div class="container pt-5 pb-5 text-right">
        <a href="#" class="fa facebook"><i class="fab fa-facebook-square"></i></a>
        <a href="#" class="fa instagram"> <i class="fab fa-instagram"></i></a>  
        <a href="#" class="fa youtube"> <i class="fab fa-youtube"></i></a>
    </div>

</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</html>
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

    <div class="fundo-principal text-center text-white">
        <div class="container ">

                <img src="assets/img/Logo.png" class="img-fluid p-4 " alt="logo principal">
                <h1 class=" font-weight-bold p-3 titulo " value="nome">
                    Informações enviadas:
              
              </h1>
                <p class=" p-2 ">                
                  <?php
                  echo "Nome: " . $_POST["nome"]."<br>";
                  echo "telefone: " . $_POST["telefone"]."<br>";
                  echo "email: " . $_POST["email"]."<br>";
                  echo "assunto (id do banco): " . $_POST["assunto"]."<br>";
                  echo "mensagem: " . $_POST["mensagem"]."<br>";
?></p>
        </div>
    </div>     

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
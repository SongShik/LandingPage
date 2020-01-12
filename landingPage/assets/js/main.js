$(document).ready(function(){
  
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,

        },
        1000:{
            items:1,
        }
    }
}),
 
    $("#formulario-landingpage").validate({
        rules : {
            nome:{
                   required:true,
                   minlength:3,
                   
            },
            telefone:{
                required: true,
                maxlength:9,
            },
            email: {
                required: true,
                email: true
              },
    
            mensagem:{
                   required:true
            },                              
      },
      messages:{
            nome:{
                   required:"Por favor, informe seu nome",
                   minlength:"O nome deve ter pelo menos 3 caracteres"
            },
            telefone:{
                required:"Por favor, informe seu telefone"
            },
            email: {
                required: "O campo não pode ser vazio",
                email: "Informe um email valido"
              },
            mensagem:{
                   required:"A mensagem não pode ficar em branco"
            }     
      }

    });

    
    $("#botao").click(function() {
 
        alert('Olá mundo');
         
        });
});

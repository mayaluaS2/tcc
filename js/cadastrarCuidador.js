$(document).ready(function(){

    $(".cadastrarCuidador").click(function(){
    
        Swal.fire({
            icon: 'success',
            title: 'Cadastro efetuado com sucesso',
            text: 'Agora você será redirecionado para fazer nossa provinha 😉, fique tranquilo só queremos saber um pouco mais sobre você',
            confirmButtonColor: "rgb(13, 184, 254)",
            button: {
                text: "Realizar Prova!"
              }, function () {
                window.location = 'provinhaCuidador.html'
              }
          })
    })
    .fail(function (){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Valores Inválidos para continuar o Cadastro 🙁',
          })

    })
})



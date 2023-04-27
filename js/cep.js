function buscaCep(){
    let cep = document.getElementById('cepCuidador').value;
    if(cep !== ""){
      let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
      let req = new XMLHttpRequest();
      req.open("GET", url);
      req.onload = function(){
        if(req.status === 200){
          let endereco = JSON.parse(req.response);
          document.getElementById("enderecoCuidador").value = endereco.street;
          document.getElementById("bairroCuidador").value = endereco.neighborhood;
          document.getElementById("cidadeCuidador").value = endereco.city;
          document.getElementById("ufCuidador").value = endereco.state;
        }     
        else if(req.status === 400){
          alert("Cep inválido!");
        }
        else{
          alert("Erro ao fazer a requisição");
        }
      };
      req.send();
    }
  }
  
  window.onload = function(){
    let textcep = document.getElementById('cepCuidador');
    textcep.addEventListener('blur', buscaCep);
  };

//---------------------------------------PARTE DO CEP DO TUTOR------------------------------

  
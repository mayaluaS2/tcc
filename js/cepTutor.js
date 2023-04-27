function buscaCep(){
    let cep = document.getElementById('cepTutor').value;
    if(cep !== ""){
      let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
      let req = new XMLHttpRequest();
      req.open("GET", url);
      req.onload = function(){
        if(req.status === 200){
          let endereco = JSON.parse(req.response);
          document.getElementById("enderecoTutor").value = endereco.street;
          document.getElementById("bairroTutor").value = endereco.neighborhood;
          document.getElementById("cidadeTutor").value = endereco.city;
          document.getElementById("ufTutor").value = endereco.state;
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
    let textcep = document.getElementById('cepTutor');
    textcep.addEventListener('blur', buscaCep);
  };
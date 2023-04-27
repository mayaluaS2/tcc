<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editarperfil.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/cep.js"></script>
    <link rel="icon" type="icon" href="img/fotinho.png"/>
    <title>Editar Perfil</title>

</head>
<body>
<!--  PARTE DA NAVBAR   -->
  <div class="responsive-bar">
    <div class="logo">
        <img src="img/ZOOLI.png" alt="LOGO" >
    </div>
    <div class="menu">
        <h1>≡</h1>
    </div>          
</div>

<header>
    <div class="header-content clearfix">
        <div class="logo">
            <img src="img/ZOOLI.png" alt="LOGO" >   
        </div>
        <nav>
           <ul>
            <li><a href="index.html">Inicial</a></li>
                    <li><a href="cadastro.html">Cuidadores</a></li>
                    <li><a href="cadastro.html">Compras</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="cadastro.html" class="cadastro">Entrar</a></li>
                
            </ul>
        </nav>
    </div>
</header>
<!--  FINAL PARTE DA NAVBAR   -->

    <div class="form-box">
        <form action="#">
            <h2>Editar Perfil</h2>
            <h3>Preencha os campos que deseje Editar</h3>

            <img class = "imagem" id="image" src="img/people/15.jpg" alt="Imagem" />
            <button class="button">
                <label for="imagemCuidador" class="editarFoto"> Editar Foto </label>
                <input type="file" id="imagemCuidador" >
            </button>

            <script>
                const imagemCuidador = document.getElementById("imagemCuidador");
                const image = document.getElementById("image");
            
                imagemCuidador.addEventListener("change", (event) => {
                    const arquivo = event.target.files[0];
                    const urlImagem = URL.createObjectURL(arquivo);
                    image.src = urlImagem;
                });
            </script>
        
            <div class="input-group w50">
                <label for="nome"> Nome Completo </label>
                <input type="text" id="nomeCuidador" name="nomeCuidador" placeholder="Digite o seu nome completo">
            </div>

            <div class="input-group w50">
                <label for="nascimento">Data Nascimento</label>
                <input type="date" id="nascimentoCuidador" name="nascimentoCuidador">
            </div>

            <div class="input-group w50">
                <label for="telefone1">Celular</label>
                <input type="tel"id="telefone1Cuidador" name="telefone1Cuidador" placeholder="Digite o número do seu novo celular">
            </div>

            <div class="input-group w50">
                <label for="telefone2">Celular Reserva</label>
                <input type="tel" id="telefone2Cuidador" name="telefone2Cuidador"placeholder="Digite o outro número de celular">
            </div>

            <div class="input-group " >
                <label for="endereco"> Endereço</label>
                <input type="text"id="enderecoCuidador" name="enderecoCuidador" placeholder="Digite o seu novo endereço" >
            </div>

            <div class="input-group w50">
                <label for="cep"> CEP</label>
                <input type="text" id="cepCuidador" name="cepCuidador" placeholder="Digite o seu CEP" >
            </div>

            <div class="input-group w50">
                <label for="numeroEnd"> Número </label>
                <input type="text" id="numeroEndCuidador" name="numeroEndCuidador" placeholder="Digite o número" >
            </div>

            <div class="input-group w50">
                <label for="bairro"> Bairro </label>
                <input type="text" id="bairroCuidador" name="bairroCuidador" placeholder="Digite o seu bairro" >
            </div>

            <div class="input-group w50">
                <label for="cidade"> Cidade </label>
                <input type="text" id="cidadeCuidador" name="cidadeCuidador" placeholder="Digite sua cidade" >
            </div>

            <div class="input-group w50">
                <label for="uf"> UF </label>
                <input type="text" id="ufCuidador" name="ufCuidador" placeholder="Digite a UF" >
            </div>

            <div class="input-group w50">
                <label for="complemento"> Complemento</label>
                <input type="text" id="complementoCuidador" name="complementoCuidador" placeholder="Digite o complemento (Bloco e Apto.)">
            </div>

            <div class="input-group">
                <label for="descricaoCuidador"> Sua Descrição </label>
                <input type="text" id="descricaoCuidador" name="descricaoCuidador" placeholder="Digite sua nova descrição" >
            </div>


            <div class="input-group">
                <label for="email">E-mail </label>
                <input type="email" id="emailCuidador" name="emailCuidador" placeholder="Digite o seu novo email ">
            </div>

            <h4>Caso tenha esquecido a senha ou queria mudar ela, clique no <a href="esqueciSenha.html">link!</a></h4>

        
            <button id="editarPerfilCuidador" name="editarPerfilCuidador" class="button" >
                <label class="buttonInput"> Editar</label>
                <input type="submit" id="editarPerfilCuidador" name="editarPerfilCuidador">
            </button>

        </form>
    </div>
</body>
</html>
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

        <h4>Parte das Informações do Pet</h4>

        <img class="imagem" id="image" src="img/animais/calopsita" alt="Imagem" />
        <button class="button">
            <label for="imagemPet" class="editarFoto"> Editar Foto </label>
            <input type="file" id="imagemPet" name="imagemPet">
        </button>

        <script>
            const imagemPet = document.getElementById("imagemPet");
            const image = document.getElementById("image");
        
            imagemPet.addEventListener("change", (event) => {
                const arquivo = event.target.files[0];
                const urlImagem = URL.createObjectURL(arquivo);
                image.src = urlImagem;
            });
        </script>

        <div class="input-group w50">
            <label for="nomePet"> Nome do Pet</label>
            <input type="text" id="nomePet" name="nomePet" placeholder="Digite o nome completo do seu Pet">
        </div>

        <div class="input-group w50">
            <label for="idadePet"> Idade do Pet</label>
            <input type="number" id="idadePet"  name="idadePet" placeholder="Digite a idade do seu Pet">
        </div>
       
        
        <div class="input-group w50">
            <label for="racaPet"> Raça do Pet</label>
            <input type="text" id="racaPet" name="racaPet" placeholder="Digite a raça do seu Pet">
        </div>

        <div class="input-group w50">
            <label for="pesoPet"> Peso do Pet (kg)</label>
            <input type="number" id="pesoPet" name="pesoPet" placeholder="Digite o peso do seu Pet">
        </div>

        <div class="input-group">
            <label for="descricaoPet"> Descrição do Pet </label>
            <input type="text" id="descricaoPet" name="descricaoPet" placeholder="Digite a descrição do seu Pet (como doenças, costumes etc)">
        </div>

        <h4>Parte das Informações do Tutor</h4>

        <div class="input-group w50">
            <label for="nome"> Nome Completo </label>
            <input type="text" id="nomeTutor" name="nomeTutor" placeholder="Digite o seu nome completo">
        </div>

        <div class="input-group w50">
            <label for="nascimento">Data Nascimento</label>
            <input type="date" id="nascimentoTutor" name="nascimentoTutor">
        </div>

        <div class="input-group w50">
            <label for="telefone1">Celular</label>
            <input type="tel"  id="telefone1Tutor" name="telefone1Tutor" placeholder="Digite o número do seu novo celular">
        </div>

        <div class="input-group w50">
            <label for="telefone2">Celular Reserva</label>
            <input type="tel"  id="telefone2Tutor" name="telefone2Tutor" placeholder="Digite o outro número de celular">
        </div>

        <div class="input-group " >
            <label for="endereco"> Endereço</label>
            <input type="text"  id="enderecoTutor" name="enderecoTutor" placeholder="Digite o seu novo endereço" >
        </div>

        <div class="input-group w50">
            <label for="cep"> CEP</label>
            <input type="text" id="cepTutor" name="cepTutor" placeholder="Digite o seu CEP" >
        </div>

        <div class="input-group w50">
            <label for="numeroEnd"> Número </label>
            <input type="text" id="numeroEndTutor" name="numeroEndTutor" placeholder="Digite o número" >
        </div>

        <div class="input-group w50">
            <label for="bairro"> Bairro </label>
            <input type="text" id="bairroTutor" name="bairroTutor" placeholder="Digite o seu bairro" >
        </div>

        <div class="input-group w50">
            <label for="cidade"> Cidade </label>
            <input type="text" id="cidadeTutor" name="cidadeTutor" placeholder="Digite sua cidade" >
        </div>

        <div class="input-group w50">
            <label for="uf"> UF </label>
            <input type="text" id="ufTutor" name="ufTutor" placeholder="Digite a UF" >
        </div>

        <div class="input-group w50">
            <label for="complemento"> Complemento</label>
            <input type="text" id="complementoTutor" name="complementoTutor" placeholder="Digite o complemento (Bloco e Apto.)">
        </div>

        <div class="input-group w50">
            <label for="email">E-mail </label>
            <input type="email" id="emailTutor" name="emailTutor" placeholder="Digite o seu novo email " >
        </div>

        <div class="input-group w50">
            <label for="senha">Senha </label>
            <input type="password" id="senhaTutor" name="senhaTutor" placeholder="Digite sua nova senha" >
        </div>

        <button id="editarPerfilTutor" name="editarPerfilTutor" class="button"  class="buttonInput">
            <label class="buttonInput"> Editar </label>
            <input type="submit" id="editarPerfilTutor">
        </button>
    
    </form>
    </div>
      
</body>
</html>
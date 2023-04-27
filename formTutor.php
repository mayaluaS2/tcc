<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" type="icon" href="img/fotinho.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/cepTutor.js"></script>
    <script src="js/termos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Encontrar</title>
</head>
<body class="bodyCadastro">
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
                <li><a href="">Compras</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="cadastro.html" class="cadastro"> Cadastra-se</a></li>
                
            </ul>
		</nav>
	</div>

</header>
<!--  FINAL PARTE DA NAVBAR   -->

    <div class="form-box">
        <h2>Criar Conta</h2>
        <h3>Preencha o formulário para se cadastrar 😉</h3>
        <form action="conexaoTutor.php" method="post">
            <h4>Parte das Informações do Pet</h4>

            <div class="input-group">
                <label for="nomePet"> Nome do Pet *</label>
                <input type="text" id="nomePet" name="nomePet" placeholder="Digite o nome completo do seu Pet" required>
            </div>

            <div class="input-group w50">
                <label for="idadePet"> Idade do Pet *</label>
                <input type="number" id="idadePet"  name="idadePet" placeholder="Digite a idade do seu Pet" maxlength="3" required>
            </div>

            <div class="input-group w50">
                <label for="imagemPet"> Foto do Pet (.png)*</label>
                <input type="file" id="imagemPet" name="imagemPet" class="editarFoto" required>
            </div>
            
            <div class="input-group w50">
                <label for="racaPet"> Raça do Pet *</label>
                <input type="text" id="racaPet" name="racaPet" placeholder="Digite a raça do seu Pet" required>
            </div>

            <div class="input-group w50">
                <label for="pesoPet"> Peso do Pet (kg)*</label>
                <input type="number" id="pesoPet" name="pesoPet" placeholder="Digite o peso do seu Pet" maxlength="3" required>
            </div>

            <div class="input-group">
                <label for="descricaoPet"> Descrição do Pet *</label>
                <input type="text" id="descricaoPet" name="descricaoPet" placeholder="Digite a descrição do seu Pet (como doenças, costumes etc)" required>
            </div>

            <h4>Parte das Informações do Tutor</h4>

            <div class="input-group">
                <label for="nomeTutor"> Nome Completo *</label>
                <input type="text" id="nomeTutor" name="nomeTutor" placeholder="Digite o seu nome completo" required>
            </div>

            <div class="input-group">
                <label for="nascimento">Data Nascimento *</label>
                <input type="date" id="nascimentoTutor" name="nascimentoTutor" required>
            </div>

            <div class="input-group w50">
                <label for="cpf">CPF *</label>
                <input type="text" inputmode="numeric" id="cpfTutor" name="cpfTutor" placeholder="00000000000" maxlength="11" required>
            </div>

            <div class="input-group w50" >
                <label for="rgTutor">RG *</label>
                <input type="text" inputmode="numeric" id="rgTutor" name="rgTutor" placeholder="0000000" maxlength="7"  required>
            </div>

            <div class="input-group w50">
                <label for="telefoneTutor">Celular *</label>
                <input type="tel" id="telefoneTutor" name="telefoneTutor" placeholder="Digite o número do seu celular" maxlength="9" required>
            </div>

            <div class="input-group w50">
                <label for="telefone2">Celular Reserva</label>
                <input type="tel" id="telefone2Tutor" name="telefone2Tutor" placeholder="Digite outro número de celular" maxlength="9" >
            </div>

            <div class="input-group w50" >
                <label for="endereco"> Endereço *</label>
                <input type="text" id="enderecoTutor" name="enderecoTutor" placeholder="Digite o seu endereço" required>
            </div>

            <div class="input-group w50">
                <label for="cep"> CEP *</label>
                <input type="text" id="cepTutor" name="cepTutor" placeholder="Digite o seu CEP" required>
            </div>

            <div class="input-group w50">
                <label for="numeroEnd"> Número *</label>
                <input type="text" id="numeroEndTutor" name="numeroEndTutor" placeholder="Digite o número" required>
            </div>

            <div class="input-group w50">
                <label for="bairro"> Bairro *</label>
                <input type="text" id="bairroTutor" name="bairroTutor" placeholder="Digite o seu bairro" required>
            </div>

            <div class="input-group w50">
                <label for="cidade"> Cidade *</label>
                <input type="text" id="cidadeTutor" name="cidadeTutor" placeholder="Digite sua cidade" required>
            </div>

            <div class="input-group w50">
                <label for="uf"> UF *</label>
                <input type="text" id="ufTutor" name="ufTutor" placeholder="Digite a UF" maxlength="2" required>
            </div>

            <div class="input-group">
                <label for="complemento"> Complemento</label>
                <input type="text" id="complementoTutor" name="complementoTutor" placeholder="Digite o complemento (Bloco e Apto.)">
            </div>

            <div class="input-group">
                <label for="emailTutor">E-mail *</label>
                <input type="email" id="emailTutor" name="emailTutor" placeholder="Digite o seu email (será utilizado para logar no site)" required>
            </div>

            <div class="input-group w50">
                <label for="senha">Senha *</label>
                <input id="pin" type="password" inputmode="numeric" minlength="4" maxlength="12" size="12" id="senhaCuidador" name="senhaCuidador" placeholder="Digite uma senha" required>
            </div>

            <div class="input-group w50">
                <label for="Confirmarsenha">Confirmar Senha *</label>
                <input id="pin" type="password" inputmode="numeric" minlength="4" maxlength="12" size="12" id="ConfirmarsenhaCuidador" name="ConfirmarsenhaCuidador" placeholder="Confirme sua senha" required>
            </div>

            <div class="termos">
            <input type="checkbox" class="checkbox" id="termosTutor" name="termosTutor" required>  Você concorda com os Termos de Uso *
            </div>

            <button id="cadastrarTutor" name="cadastrarTutor"class="button">
                <label class="buttonInput"> Cadastrar </label>
                <input type="submit" id="cadastrarTutor" name="cadastrarTutor" >
            </button>
       
        </form>
        
    </div>
</body>
</html>
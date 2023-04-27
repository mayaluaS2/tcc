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
    <!-- FALTA COLOCAR O LINK DO 'conexao.php' -->
    <script src="js/termos.js"></script>
    <script src="js/cep.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Seja Cuidador</title>
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
                <li><a href="">Compras</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="cadastro.html" class="cadastro"> Cadastra-se</a></li>
                
            </ul>
		</nav>
	</div><!-- header-content -->
</header>
<!--  FINAL PARTE DA NAVBAR   -->

    <div class="form-box">
        <h2>Criar Conta</h2>
        <h3>Preencha o formulário para se cadastrar 😉</h3>
        <br>
        <form action="conexao.php" method="post">

            <div class="input-group">
                <label for="nome"> Nome Completo *</label>
                <input type="text" id="nomeCuidador" name="nomeCuidador" placeholder="Digite o seu nome completo" required>
            </div>

            <div class="input-group w50">
                <label for="nascimento">Data Nascimento *</label>
                <input type="date" id="nascimentoCuidador" name="nascimentoCuidador" required>
            </div>
            
            <div class="input-group w50">
                <label for="imagemCuidador"> Sua Foto(.png)*</label>
                <input type="file" id="imagemCuidador" name="imagemCuidador" class="editarFoto"  required>
            </div>

            <div class="input-group w50">
                <label for="cpf">CPF *</label>
                <input type="text" inputmode="numeric" id="cpf" name="cpf" placeholder="00000000000" maxlength="11" required>
            </div>

            <div class="input-group w50" >
                <label for="rg">RG *</label>
                <input type="text" inputmode="numeric" id="rgCuidador" name="rgCuidador" placeholder="00000000" maxlength="11" required>
            </div>

            <div class="input-group w50">
                <label for="telefone1">Celular *</label>
                <input type="tel" id="telefoneCuidador" name="telefoneCuidador" placeholder="Digite o número do seu celular" maxlength="9" required>
            </div>

            <div class="input-group w50">
                <label for="telefone2">Celular Reserva</label>
                <input type="tel" id="telefone2Cuidador" name="telefone2Cuidador" placeholder="Digite outro número de celular" maxlength="9">
            </div>

            <div class="input-group" >
                <label for="endereco"> Endereço *</label>
                <input type="text" id="enderecoCuidador" name="enderecoCuidador" placeholder="Digite o seu endereço" required>
            </div>

            <div class="input-group w50">
                <label for="cep"> CEP *</label>
                <input type="text" id="cepCuidador" name="cepCuidador" placeholder="Digite o seu CEP" required >
            </div>

            <div class="input-group w50">
                <label for="numeroEnd"> Número *</label>
                <input type="text" id="numeroEndCuidador" name="numeroEndCuidador" placeholder="Digite o número" required>
            </div>

            <div class="input-group w50">
                <label for="bairro"> Bairro *</label>
                <input type="text" id="bairroCuidador" name="bairroCuidador" placeholder="Digite o seu bairro" required>
            </div>

            <div class="input-group w50">
                <label for="cidade"> Cidade *</label>
                <input type="text" id="cidadeCuidador" name="cidadeCuidador" placeholder="Digite sua cidade" required>
            </div>

            <div class="input-group w50">
                <label for="uf"> UF *</label>
                <input type="text" id="ufCuidador" name="ufCuidador" placeholder="Digite a UF" maxlength="2" required>
            </div>

            <div class="input-group w50">
                <label for="complemento"> Complemento</label>
                <input type="text" id="complementoCuidador" name="complementoCuidador" placeholder="Digite o complemento (Bloco e Apto.)">
            </div>

            <div class="input-group">
                <label for="descricaoCuidador"> Sua Descrição *</label>
                <input type="text" id="descricaoCuidador" name="descricaoCuidador" placeholder="Digite sua descrição (isso será visualizado pelo Tutor )" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail *</label>
                <input type="email" id="emailCuidador" name="emailCuidador" placeholder="Digite o seu email (será utilizado para logar no site)" required>
            </div>

            <div class="input-group w50">
                <label for="senha">Senha *</label>
                <input id="pin" type="password" inputmode="numeric" minlength="4" maxlength="8" size="8" id="senhaCuidador" name="senhaCuidador" placeholder="Digite sua senha" required>
            </div>

            <div class="input-group w50">
                <label for="Confirmarsenha">Confirmar Senha *</label>
                <input id="pin" type="password" inputmode="numeric" minlength="4" maxlength="8" size="8" id="ConfirmarsenhaCuidador" name="ConfirmarsenhaCuidador" placeholder="Confirme sua senha" required>
            </div>

            <div class="termos">
            <input type="checkbox" class="checkbox" id="termosCuidador" name="termosCuidador" required> Você concorda com os Termos de Uso *</a>
            </div>
        
            <button id="cadastrarCuidador" type="submit" name="cadastrarCuidador" class="button">
                <label class="buttonInput"> Cadastrar </label>
                <input type="submit" id="cadastrarCuidador" name="cadastrarCuidador">
            </button>
            <!--apos preecnher form redirecionar para prova-->

            
    
        </form>
    </div>
</body>
</html>


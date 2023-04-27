<?php

if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')){
    $Botao= $_POST['Botao'];
   
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpets";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

	if ($Botao == "Inserir"){
$descricao = $_POST['descricao'];



// Recebe os dados do formulário

$descricao = $_POST['descricao'];


// Prepara e executa a consulta SQL para inserir os dados no banco de dados
$sql = "INSERT INTO TB_CATEGORIA (DESCRICAO_CATEGORIA ) VALUES ('$descricao')";

if ($conn->query($sql) === TRUE) {
    // Move a imagem para o diretório de uploads


    echo "Categoria cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $conn->error;
}


}
// Fecha a conexão com o banco de dados



 if($Botao=="Cadastrar"){
 

    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $contato = $_POST['contato'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cnpj=$_POST['cnpj'];
    $status = $_POST['status'];
    
    // Verifica se a conexão foi bem sucedida
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO TB_FORNECEDOR (RAZAO_FORNECEDOR,NOME_FANTASIA_FORNECEDOR,CONTATO_FORNECEDOR,ENDERECO_FORNECEDOR,EMAIL_FORNECEDOR,CNPJ_FORNECEDOR, STATUS_FORNECEDOR ) VALUES ('$razao', '$fantasia', '$contato', '$endereco', '$email', '$cnpj', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Fornecedor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar fornecedor: " . $conn->error;
    }
         }
        
        if($Botao=="Cadastrar1"){

            $descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade =$_POST['qntd'];

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$tamanho = $_POST['tamanho'];
$idCategoria=$_POST['idCategoria'];
$idfornecedor=$_POST['idfornecedor'];
$imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
// Prepara e executa a consulta SQL para inserir os dados no banco de dados
$sql = "INSERT INTO tb_prod (NOME_PROD, DESC_PROD, QNT_PROD,VALOR_PROD, TAMANHO_PROD, ID_CATEGORIA,ID_FORNECEDOR ,imagem, VALOR_VENDA_PRODUTO, CODIGO_BARRAS_PRODUTO,STATUS_PRODUTO) VALUES ('$nome', '" . mysqli_real_escape_string($conn, $descricao) . "', '$quantidade', '$preco','$idCategoria','$idfornecedor', '$tamanho','$imagem', '0','0', 'disponivel')";

if ($conn->query($sql) === TRUE) {
    // Move a imagem para o diretório de uploads


    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $conn->error;
}
$conn->close();
        }
    } 
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/respondermessage.css">

    <title>Document</title>
</head>
<body>
<div id="formulario-container" >
<h1>Cadastro de Categoria</h1>
    

	<form action="cadastrosadm.php?valor=enviado" method="post" enctype="multipart/form-data">
	

		<label for="descricao">Descrição do produto:</label>
		<textarea name="descricao" id="descricao" required></textarea>

       
<button id="Botao" type="submit" name="Botao"  value ="Inserir"></button>
</form>

    <h1>Cadastro de TB_FORNECEDOR</h1>
    

	<form action="cadastrosadm.php?valor=enviado" method="post" enctype="multipart/form-data">
	

    <label for="razao">Razão Social:</label>
		<input type="text" id="razao" name="razao" required><br><br>

		<label for="fantasia">Nome Fantasia:</label>
		<input type="text" id="fantasia" name="fantasia" required><br><br>

		<label for="contato">Contato:</label>
		<input type="text" id="contato" name="contato" required><br><br>

		<label for="endereco">Endereço:</label>
		<input type="text" id="endereco" name="endereco" required><br><br>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="cnpj">CNPJ:</label>
		<input type="text" id="cnpj" name="cnpj" required><br><br>

		<label for="status">Status:</label>
		<select id="status" name="status">
			<option value="Ativo">Ativo</option>
			
		</select><br><br>

		<button id="Botao" type="submit" name="Botao"  value="Cadastrar">Cadastrar</button>
	

</form>

    <h1>Cadastro de produtos</h1>
    

	<form action="cadastrosadm.php?valor=enviado" method="post" enctype="multipart/form-data">
		<label for="nome">Nome do produto:</label>
		<input type="text" name="nome" id="nome" required>

		<label for="descricao">Descrição do produto:</label>
		<textarea name="descricao" id="descricao" required></textarea>

        <label for="qntd"> quantidade:</label>
		<input type="number" name="qntd" id="qntd"  step="1" required>

		<label for="preco">Preço do produto:</label>
		<input type="number" name="preco" id="preco" step="0.01" required>

        <label for="idCategoria">Cod Categoria:</label>
		<input type="number" name="idCategoria" id="idCategoria" onchange="updateCategoriaNome()"  required>

        <label for="nomecategoria">Nome da Categoria:</label>
		<input type="text" name="nomecategoria" id="nomecategoria" Readonly  required>
        
        <label for="idfornecedor">Cod fornecedor:</label>
		<input type="number" name="idfornecedor" id="idfornecedor"  onchange="updateFornecedorNome()"  required>

        
        
        <label for="nomefornecedor">Nome fornecedor:</label>
		<input type="text" name="nomefornecedor" id="nomefornecedor" Readonly required>

        <label for="Tamanho">Tamanho do produto:</label>
		<input type="text" name="tamanho" id="tamanho"  required>


		<label for="imagem">Imagem do produto:</label>
		<input type="file" name="imagem" id="imagem" accept="image/*" required>

        <button id="Botao" type="submit" name="Botao"  value="Cadastrar1">Cadastrar</button>
	</form>

    <script>
  function updateCategoriaNome() {
    // Obtém o valor do campo "idCategoria"
    var idCategoria = document.getElementById("idCategoria").value;
    
    // Faz uma requisição AJAX para buscar o nome da categoria no servidor
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Atualiza o valor do campo "nomecategoria" com o nome da categoria
        document.getElementById("nomecategoria").value = xhr.responseText;
      }
    };
    xhr.open("GET", "buscar_categoria.php?id=" + idCategoria, true);
    xhr.send();
  }
  function updateFornecedorNome() {
    // Obtém o valor do campo "idCategoria"
    var idfornecedor = document.getElementById("idfornecedor").value;
    
    // Faz uma requisição AJAX para buscar o nome da categoria no servidor
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Atualiza o valor do campo "nomecategoria" com o nome da categoria
        document.getElementById("nomefornecedor").value = xhr.responseText;
      }
    };
    xhr.open("GET", "buscar_fornecedor.php?id=" + idfornecedor, true);
    xhr.send();
  }
</script>
</div>
</body>
</html>






<?php
}
?>







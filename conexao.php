 <?php

$conexao = new MySQLi('localhost', 'root', '', 'dbpets');
//$data_americana = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['nascimentoCuidador'])));
$data_americana=$_POST['nascimentoCuidador'];
$nomeCuidador = isset($_POST['nomeCuidador']) ? $_POST['nomeCuidador'] : "";
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
$telefoneCuidador = isset($_POST['telefoneCuidador']) ? $_POST['telefoneCuidador'] : "";
$nascimentoCuidador = isset($data_americana) ? $data_americana : "";
$imagemCuidador = isset($_POST['imagemCuidador']) ? $_POST['imagemCuidador'] : "";
$descricaoCuidador = isset($_POST['descricaoCuidador']) ? $_POST['descricaoCuidador'] : "";
$emailCuidador = isset($_POST['emailCuidador']) ? $_POST['emailCuidador'] : "";
$senhaCuidador = isset($_POST['senhaCuidador']) ? $_POST['senhaCuidador'] : "";

$enderecoCuidador = isset($_POST['enderecoCuidador']) ? $_POST['enderecoCuidador'] : "";
$cepCuidador = isset($_POST['cepCuidador']) ? $_POST['cepCuidador'] : "";
$numeroEndCuidador = isset($_POST['numeroEndCuidador']) ? $_POST['numeroEndCuidador'] : "";
$bairroCuidador = isset($_POST['bairroCuidador']) ? $_POST['bairroCuidador'] : "";
$cidadeCuidador = isset($_POST['cidadeCuidador']) ? $_POST['cidadeCuidador'] : "";
$ufCuidador = isset($_POST['ufCuidador']) ? $_POST['ufCuidador'] : "";
$complementoCuidador = isset($_POST['complementoCuidador']) ? $_POST['complementoCuidador'] : "";


$sql = "INSERT INTO tb_cuidador (NOME_CUIDADOR, CPF_CUIDADOR, FONE_CUIDADOR, DTA_NASC_CUIDADOR, IMAGE,  STATUS_CUIDADOR, EMAIL_CUIDADOR , SENHA_CUIDADOR) 
VALUES ('$nomeCuidador', '$cpf' , '$telefoneCuidador' , '$nascimentoCuidador', '$imagemCuidador' , '$descricaoCuidador' , '$emailCuidador' , '$senhaCuidador')";

// Executa a consulta SQL e obtém o ID do cuidador inserido
if ($conexao->query($sql) === TRUE) {
    $id_cuidador = $conexao->insert_id;
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

// Insere os dados do endereço com o ID do cuidador
$sql_endereco = "INSERT INTO TB_ENDERECO_CUIDADOR (ID_CUIDADOR, RUA_ENDERECO_CUIDADOR, CEP_ENDERECO_CUIDADOR, NUM_ENDERECO_CUIDADOR, BAIRRO_ENDERECO_CUIDADOR, CIDADE_ENDERECO_CUIDADOR, UF_ENDERECO_CUIDADOR,  COMP_ENDERECO_CUIDADOR)  
VALUES ('$id_cuidador', '$enderecoCuidador', '$cepCuidador', '$numeroEndCuidador', '$bairroCuidador', '$cidadeCuidador', '$ufCuidador', '$complementoCuidador')";

$resultado = $conexao->query($sql_endereco) or trigger_error($conexao->error);

if($resultado==true){
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conexao->error;
}

$conexao->close();



 ?>
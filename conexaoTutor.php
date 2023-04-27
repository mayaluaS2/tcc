<?php

$conect = new MySQLi('localhost', 'root', '', 'dbpets');

$nomePet = isset($_POST['nomePet']) ? $_POST['nomePet'] : "";
$idadePet = isset($_POST['idadePet']) ? $_POST['idadePet'] : "";
$racaPet = isset($_POST['racaPet']) ? $_POST['racaPet'] : "";
$pesoPet = isset($_POST['pesoPet']) ? $_POST['pesoPet'] : "";
$descricaoPet = isset($_POST['descricaoPet']) ? $_POST['descricaoPet'] : "";

$nomeTutor = isset($_POST['nomeTutor']) ? $_POST['nomeTutor'] : "";
$nascimentoTutor = isset($_POST['nascimentoTutor']) ? $_POST['nascimentoTutor'] : "";
$cpfTutor = isset($_POST['cpfTutor']) ? $_POST['cpfTutor'] : "";
$rgTutor = isset($_POST['rgTutor']) ? $_POST['rgTutor'] : "";
$telefoneTutor = isset($_POST['telefoneTutor']) ? $_POST['telefoneTutor'] : "";
$emailTutor = isset($_POST['emailTutor']) ? $_POST['emailTutor'] : "";
$senhaCuidador = isset($_POST['senhaCuidador']) ? $_POST['senhaCuidador'] : "";


$enderecoTutor = isset($_POST['enderecoTutor']) ? $_POST['enderecoTutor'] : "";
$cepTutor= isset($_POST['cepTutor']) ? $_POST['cepTutor'] : "";
$numeroEndTutor = isset($_POST['numeroEndTutor']) ? $_POST['numeroEndTutor'] : "";
$bairroTutor = isset($_POST['bairroTutor']) ? $_POST['bairroTutor'] : "";
$cidadeTutor = isset($_POST['cidadeTutor']) ? $_POST['cidadeTutor'] : "";
$ufTutor = isset($_POST['ufTutor']) ? $_POST['ufTutor'] : "";
$complementoTutor = isset($_POST['complementoTutor']) ? $_POST['complementoTutor'] : "";

$tab = "INSERT INTO tb_tutor (nome_TutorPet, idade_TutorPet, raca_TutorPet,  peso_TutorPet, descricao_TutorPet, nome_Tutor, nasc_Tutor, cpf_Tutor, rg_Tutor, fone_Tutor, email_Tutor, senha_Tutor) 
VALUES ('$nomePet' , '$idadePet' , '$racaPet' , '$pesoPet' , '$descricaoPet' , '$nomeTutor' , '$nascimentoTutor' , '$cpfTutor' , '$rgTutor' , '$telefoneTutor' ,  '$emailTutor' , '$senhaTutor')";

// Executa a consulta SQL e obtém o ID do cuidador inserido
if ($conect->query($tab) === TRUE) {
    $id_TutorPet = $conect->insert_id;
} else {
    echo "Erro: " . $tab . "<br>" . $conect->error;
}


// Insere os dados do endereço com o ID do cuidador
$sql_enderecoPET = "INSERT INTO TB_ENDERECO_TUTOR (id_TutorPet, RUA_ENDERECO_TUTOR, CEP_ENDERECO_TUTOR, NUM_ENDERECO_TUTOR, BAIRRO_ENDERECO_TUTOR, CIDADE_ENDERECO_TUTOR, UF_ENDERECO_TUTOR,  COMP_ENDERECO_TUTOR)  
VALUES ('$id_TutorPet', '$enderecoTutor', '$cepTutor', '$numeroEndTutor', '$bairroTutor', '$cidadeTutor', '$ufTutor', '$complementoTutor')";

$ligacao = $conect->query($sql_enderecoPET) or trigger_error($conect->error);


if($ligacao==true){
    
    echo "dados inseridos com sucesso";
} 

else{
    echo "erro";
}

$conect ->close();


?>
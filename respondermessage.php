<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;





 if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado'))

 {
 $Botao = $_POST["Botao"];

$messageresposta=$_POST["mensagem"];

 $Nome=$_POST["nome"];

 $id_contato=$_POST["id_contato"];






if ($Botao == "Inserir")

{






require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';

require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);






$name = $_POST['nome'];
 $email = $_POST['email'];

 $message = $_POST['mensagem'];




 $mail->isSMTP();

 $mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com';

 $mail->Port = 587;

 $mail->SMTPSecure = 'tls';

 $mail->SMTPAuth = true;

        $mail->Username = 'temporariac738@gmail.com';

        $mail->Password = 'zyvozbmlnipavehb';

     

        $mail->setFrom('temporariac738@gmail.com', 'Zooli Company');

        $mail->addReplyTo($email, $name);

        $mail->addAddress($email);

     

        $mail->Subject = 'Resposta ao seu contato';

        $mail->Body    = $message;

     

        if(!$mail->send()) {

          echo 'Mensagem não pôde ser enviada.';

          echo 'Erro do Mailer: ' . $mail->ErrorInfo;

         

        } else {

          echo 'Mensagem enviada com sucesso!';

          $servername = "localhost";

$username = "root";

$password = "";

$dbname = "dbpets";




// Cria a conexão

$conn = new mysqli($servername, $username, $password, $dbname);




// Verifica a conexão

if ($conn->connect_error) {

  die("Falha na conexão: " . $conn->connect_error);

 

}

         

          $sql="UPDATE tb_faleconosco SET status_contato='respondido' WHERE ID_CONTATO =$id_contato";

          if($conn->query($sql)===True){

            echo"STATUS mudado";

          }

          else{

            echo"nao foi possivel acessar";

          }

        }

      }}

else {

  ?>





<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/respondermessage.css">

    <link rel="stylesheet" href="css/estilo.css">

    <link rel="icon" type="icon" href="img/fotinho.png"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="js/scripts.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  


    <title>Mensagens</title>

</head>

<?php





$servername = "localhost";

$username = "root";

$password = "";

$dbname = "dbpets";




// Cria a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

$conn->set_charset("utf8");


// Verifica a conexão

if ($conn->connect_error) {

  die("Falha na conexão: " . $conn->connect_error);

}




// Seleciona os dados da tabela "mensagens"

$sql = "SELECT ID_CONTATO, NOME_CONTATO, EMAIL_CONTATO, ASSUNTO_CONTATO FROM tb_faleconosco WHERE status_contato <>'respondido'" ;




$result = $conn->query($sql);
$conn->set_charset("utf8");




// Verifica se há resultados

if ($result->num_rows > 0) {


  // Exibe os resultados

   $id_contato1=null;

  while ($row = $result->fetch_assoc()) {

    $id_contato1= $row['ID_CONTATO'];

    echo '<div class="mensagem" onclick="exibirFormulario(' . $row['ID_CONTATO'] . ')">';

   

    echo '<h3>' . $row['NOME_CONTATO'] . '</h3>';

    echo '<p>' . $row['EMAIL_CONTATO'] . '</p>';

    echo '</div>';

  }

 

  ?>

  <!-- Close the while loop's curly brace here -->

  <div id="formulario-container" style="display:none;">

    <form id="formulario" action="respondermessage.php?valor=enviado" method="post">

      <input type="hidden" name="id_contato" id="id_contato" Readonly  value="">

      <input type="text" id="nome" name="nome" placeholder="Seu nome"  Readonly ><br>

      <input type="email" id="email" name="email" placeholder="Seu e-mail" Readonly ><br>

      <input type="text" id="assunto" name="assunto" placeholder="Assunto" Readonly ><br>

      <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem" required></textarea><br>

      <button id="Botao" type="submit" name="Botao" value ="Inserir"class="submit-btn">Enviar</button>  

    </form>

  </div>




  <script>

    function exibirFormulario(ID_CONTATO) {

      // Envia uma solicitação AJAX para recuperar os dados da mensagem

      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

          // Preenche os campos do formulário com os dados da mensagem

          var mensagem = JSON.parse(this.responseText);

          document.getElementById('id_contato').value = mensagem.ID_CONTATO;




          document.getElementById('nome').value = mensagem.NOME_CONTATO;

          document.getElementById('email').value = mensagem.EMAIL_CONTATO;

          document.getElementById('assunto').value = 'Re: ' + mensagem.ASSUNTO_CONTATO;

          document.getElementById('mensagem').focus();




          // Exibe o formulário

          document.getElementById('formulario-container').style.display = 'block';

        }

      };

      xhttp.open('GET', 'recuperar_mensagem.php?id=' + ID_CONTATO, true);

      xhttp.send();

    }

  </script>

  <?php

} else {

  echo "Não há mensagens.";

}

}

?>

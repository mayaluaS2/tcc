<?php
session_start();


if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    // Redirecionar para a página de login
   echo" <script> alert('Você já está logado!')
    window.location.href= 'home.php'</script>";
}
if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) {
    if(isset($_POST['logarTutor'])) {
        $emailTutor = $_POST['emailTutor'];
        $senhaTutor = $_POST['senhaTutor'];
        //acessa
        $conexao = new MySQLi('localhost', 'root', '', 'dbpets');
        $emailTutor = $_POST['emailTutor'];
        $senhaTutor = $_POST['senhaTutor'];
        $consulta = "SELECT * FROM tb_tutor WHERE email_Tutor = '$emailTutor' and senha_Tutor = '$senhaTutor'";
        $resultado = $conexao->query($consulta) or trigger_error($conexao->error);
        // Verificando
        if(mysqli_num_rows($resultado) < 1) {
           
            echo "<script>alert('Não existe o email!'); window.location.href='loginTutorPet.php';</script>";

        } else {
            echo"<script>alert('Bem vindo');window.location.href='home.php';</script>";
            $_SESSION['logado'] = true;
        }
        $conexao->close();
    }
} else {






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="icon" href="img/fotinho.png"/>
</head>
<body>
    <div class="overlay">
        <form action="login.php?valor=enviado" method="post">
           <div class="con">
            <header class="head-form">
                <img src="img/ZOOLI.png" alt="zoo" width="30%">
                <p>Entre utilizando seu Email e sua Senha</p>
            </header>
                <input class="form-input" name="emailTutor" id="emailTutor" type="email" placeholder="📧 Digite seu Email...">
                <br>
                <input id="pin" name="senhaTutor" id="senhaTutor" type="password" inputmode="numeric" minlength="4" maxlength="8" size="8" id="senhaTutor" name="senhaTutor" placeholder="🔒 Digite sua Senha..." class="form-input" required>
                <br>
                <button class="log-in" href="">
                    <input type="submit" id="logarTutor" name="logarTutor">
                </button>
                <button class="submits frgt-pass"><a href="" rel="esqueci">Esqueci minha Senha</a></button>
                <button class="submits sign"><a href="formTutor.php" rel="Cadastrar-se"> Cadastrar-se</a></button>
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                
          </div>
        </form>
    </div>
</body>
</html>
<?php }
?>
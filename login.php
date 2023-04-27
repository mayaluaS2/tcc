<?php
session_start();


if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    // Redirecionar para a página de login
   echo" <script> alert('Você já está logado!')
    window.location.href= 'home.php'</script>";
}
if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')) {
    if(isset($_POST['logarCuidador'])) {
        $emailCuidador = $_POST['email'];
        $senhaCuidador = $_POST['ConfirmarsenhaCuidador'];
        //acessa
        $conexao = new MySQLi('localhost', 'root', '', 'dbpets');
        $emailCuidador = $_POST['email'];
        $senhaCuidador = $_POST['ConfirmarsenhaCuidador'];
        $consulta = "SELECT * FROM tb_cuidador WHERE EMAIL_CUIDADOR = '$emailCuidador' and SENHA_CUIDADOR = '$senhaCuidador'";
        $resultado = $conexao->query($consulta) or trigger_error($conexao->error);
        // Verificando
        if(mysqli_num_rows($resultado) < 1) {
           
            echo "<script>alert('Não existe o email!'); window.location.href='login.php';</script>";

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
                <input class="form-input" name="email" id="email" type="email" placeholder="📧 Digite seu Email...">
                <br>
                <input id="pin" id="txt-senha" type="password" inputmode="numeric" minlength="4" maxlength="8" size="8" id="ConfirmarsenhaCuidador" name="ConfirmarsenhaCuidador" placeholder="🔒 Digite sua Senha..." class="form-input" required>
                <br>
                <button class="log-in" href="">
                    <input type="submit" id="logarCuidador" name="logarCuidador">
                </button>
                <button class="submits frgt-pass"><a href="" rel="esqueci">Esqueci minha Senha</a></button>
                <button class="submits sign"><a href="formCuidador.php" rel="Cadastrar-se"> Cadastrar-se</a></button>
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                
          </div>
        </form>
    </div>
</body>
</html>
<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Visualizar Perfil</title>
    <link rel="icon" type="icon" href="img/fotinho.png"/>
    <link rel="stylesheet" href="css/visualizar.css">
    <link rel="stylesheet" href="css/estilo.css">
        <script src="js/vizuperfil.js"></script>
</head>
<body>
<!--------------------------------------  PARTE DA NAVBAR   ----------------------------------------->
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
                    <li><a href="editarPerfilCuidador" class="cadastro"> Editar Perfil</a></li>
                    <li><a href="visualizarComoTutor.html" class="cadastro"> Ver meu Perfil</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
<!----------------------------------------  FINAL PARTE DA NAVBAR   ---------------------------------------->
    <div class="user__card" >
        <div class="bg">
          <div class="perfil"><i ><img src="img/people/16.jpg" width="180" height="180" alt=""></i></div>
          <div class="aside"><i class="fa fa-bars"></i></div>
              </div>
              <div class="main__content">
                  <div class="upper__card">
                      <div class="info">
                          <h3>Danilo</h3>
                          <p>35 anos</p>
                          <p><i>Pet Sister</i></p>
                      </div><!-- .info -->
                      
                  </div><!-- .upper__card -->
                  <div class="down__card">
                      <div class="bio">
                          <h3>Sobre mim</h3>
                          <p>Olá, me chamo Danilo, e sou apaixonado pela natureza, e pelos seres vivos. Tenho um shih-tzu de 1 ano, sou cuidadoso e atencioso e preso pelo bem estar, segurança e o conforto dos animais.</p>
                          <br><br><br>
                          <div class="price-box">
                            <div class="price">
                                <div>
                                    <ins>R$22,00/Dia</ins>
                                </div>
                                
                            </div>
                        </div>
                        
                      </div>
                  </div>
              </div><!-- .main__content -->
          </div><!-- .user__card -->
</body>
</html>
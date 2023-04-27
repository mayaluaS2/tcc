<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="icon" href="IMG/dowload.png">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="" rel="shortcut icon">
  </head>
  <body>
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
    
    
      <div class="models">
          <div class="models-item">
              <a href="">
                  <div class="models-item--img"><img src="" /></div>
                  <div class="models-item--add">+</div>
              </a>
              <div class="models-item--price">R$ --</div>
              <div class="models-item--name">--</div>
              <div class="models-item--desc">--</div>
          </div>
          <div class="cart--item">
              <img src="" />
              <div class="cart--item-nome">--</div>
              <div class="cart--item--qtarea">
                  <button class="cart--item-qtmenos">-</button>
                  <div class="cart--item--qt">1</div>
                  <button class="cart--item-qtmais">+</button>
              </div>
          </div>
      </div>
     
       <img src="img/Meu projeto-1.png" alt=""  >
          <div class="menu-openner">
            
              <span>0</span>
              <span class="material-icons">shopping_cart</span>
          </div>
      </header>
      <main>


        
          <div class="models-area"></div>
      </main>
      
      <aside>
          <div class="cart--area">
              <div class="menu-closer">
                  <span class="material-icons">close</span>
              </div>
              <h1>Seus pedidos</h1>
              <div class="cart"></div>
              <div class="cart--details">
                  <div class="cart--totalitem subtotal">
                      <span>Subtotal</span>
                      <span>R$ --</span>
                  </div>
                  <div class="cart--totalitem desconto">
                      <span>Desconto (-10%)</span>
                      <span>R$ --</span>
                  </div>
                  <div class="cart--totalitem total big">
                      <span>Total</span>
                      <span>R$ --</span>
                  </div>
                  <div class="cart--finalizar" onclick="a()">Finalizar a compra</div>
              </div>
          </div>
      </aside>
      <div class="modelsWindowArea">
          <div class="modelsWindowBody">
              <!-- 
                  Este botão é o cancelar do mobile (mostrar com F12) a ação do cancelar
                  da janela modal vai ser igual, logo vamos fazer uma função
              -->
              <div class="modelsInfo--cancelMobileButton">Voltar</div>
              <div class="modelsBig">
                  <img src="" />
              </div>
              <div class="modelsInfo">
                  <h1>--</h1>
                  <div class="modelsInfo--desc">--</div>
                
                  <div class="modelsInfo--pricearea">
                      <div class="modelsInfo--sector">Preço</div>
                      <div class="modelsInfo--price">
                          <div class="modelsInfo--actualPrice">R$ --</div>
                          <div class="modelsInfo--qtarea">
                              <button class="modelsInfo--qtmenos">-</button>
                              <div class="modelsInfo--qt">1</div>
                              <button class="modelsInfo--qtmais">+</button>
                          </div>
                      </div>
                  </div>
                  <div class="modelsInfo--addButton">Adicionar ao carrinho</div>
                  <div class="modelsInfo--cancelButton">Cancelar</div>
              </div>
          </div>
      </div>
     
      <script  src="js/real.js"></script>
      <script src="js/index.js"></script>
  </body>
  </html>
<?php

session_start();
// Autenticação bem-sucedida


if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Redirecionar para a página de login
    header('Location: login.php');
    exit;
}
else{


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/perguntas.css">
    <link rel="stylesheet" href="css/vitrine.css">
    <link rel="stylesheet" href="css/hamster.css">
    <link rel="stylesheet" href="css/passos.css">
    <link rel="icon" type="icon" href="img/fotinho.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <title>Início</title>
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
                    <li><a href="cuidador.html">Cuidadores</a></li>
                    <li><a href="">Compras</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a href="visualizarCuidador.html" class="PerfilCuidador"> 👤</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
<!----------------------------------------  FINAL PARTE DA NAVBAR   ---------------------------------------->

<!---------------------------------------------TEXTO DO INICIO---------------------------------------------->
    <section class="sobre">
            
        <img src="img/hamster.png" alt="hamster" class="hamster">

        <div class="tabs">

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <ul>
            <li title="nos"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
                </svg><span>Quem somos?</span></label></li>
            <li title="cuidad"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
                </svg><span>Cuidador</span></label></li>
            <li title="benefícios"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
                </svg><span>Benefícios</span></label></li>
            <li title="divulgacao"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
                </svg><span>Divulgação</span></label></li>
            </ul>
        
            <div class="content">
            <section>
                <h2>Quem somos?</h2>
                <p> A Zooli é a sua melhor amiga, um site ou aplicativo, que faz tudo para o seu animalzinho. Você conta com nosso suporte e Garantia Veterinária do momento que a visita, passeio ou hospedagem começa até o minuto que acaba.
                A paixão e o amor pelos pets é o que nos motiva a oferecer o melhor para todos! </p>
            </section>
            <section>
                <h2>Cuidador</h2>
                 <p>O primeiro passo é se inscrever, contando um pouco mais de você para nós, reserve um tempo para falar por que, quer fazer parte do nosso time e a sua relação com os animais. Após essa etapa realizaremos um teste.  
                E é só esperar e segurar a ansiedade. Em até 7 dias, a gente analisa todos os perfis e dá um retorno, por e-mail. 
                Além disso você vai receber conteúdos exclusivos para aprender mais sobre as atividades prestadas e o universo animal.  </p>
            </section>
            <section>
                <h2>Benefícios</h2>
                 <p>• Você não precisa se preocupar com cobrança de cliente, maquininha de cartão ou outras burocracias. A gente cuida de tudo disso. <br>
                • O Marketing é por nossa conta, divulgamos estrategicamente seu perfil e ajudamos você a promover o seu negócio. <br>
                • Você recebe fotos e atualizações no celular para acompanhar seu pet de perto. <br>
                • Avaliar sua experiência é importante pro cuidador e para a gente. <br></p>
            </section>
            <section>
                <h2>Divulgação</h2>
                 <p>A nossa estratégia de marketing baseia-se na divulgação massiva e estratégica dos nossos produtos e serviços, visando a otimização dos nossos recursos e soluções logísticas viáveis.  
                A maior parte da divulgação é realizada por meios digitais através de anúncios, criação de conteúdos e a atividade nas redes sociais, além disso também incentivamos a divulgação dos nossos serviços através da satisfação dos nossos clientes e de suas indicações para outras pessoas. </p>
            </section>
            </div>
        </div>
    </section>

    <!---------------------------------------------------- COMEÇO DA VITRINE - cuidador -------------------------------------------------->
    <section class="vitrine1">
        <h1 class="vitrine">Venha conhecer nossos Cuidadores</h1>
        <ul class="product-list">
            <li class="product-item">
                <a href="cadastro.html" target="_blank" class="product-link">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="img/people/11.jpg" width="220" height="210" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Giovanna</h2>
                            <p class="description">Vc que procura uma pessoa madura para cuidar do seu Pet...Achou!, eu trabalho com ordem e muito amor.</p>
                            <ul class="star-ranking">
                                <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                                <li class="qtd-votes">
                                    </span>(5)</span>
                                </li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div><ins>R$18,00/Dia</ins></div>
                            </div>
                        </div>
                    </figure>
                </a>
            </li>
            <li class="product-item">
                <a href="cadastro.html" target="_blank" class="product-link">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="img/people/5.jpg" width="220" height="210" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Priscila</h2>
                            <p class="description">Olá! Sou Priscila, tenho 28 anos e moro no Bom Retiro, Centro de SP.
                            Adoro tanto cachorro quanto gato. Tenho um filho de 3 anos que também ama animais, mexe com todos que vê na rua.</p>
                            <ul class="star-ranking">
                                <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                                <li class="qtd-votes">
                                    </span>(9)</span>
                                </li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div><ins>R$35,00/Dia</ins></div>
                            </div>
                        </div>
                    </figure>
                </a>
            </li>
            <li class="product-item">
                <a href="cadastro.html" target="_blank" class="product-link">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="img/people/15.jpg" width="220" height="210" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Jessica</h2>
                            <p class="description">Sou tranquila, não tenho pets ainda, abri meu lar para os pets, para ter um experiência com eles por não ter ainda o meu, posso cuidar do seu enquanto você se ausentar, para trabalhar, estudar e passear e etc...</p>
                            <ul class="star-ranking">
                                <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                                <li class="qtd-votes">
                                    </span>(11)</span>
                                </li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div><ins>R$25,00/Dia</ins></div>
                            </div>
                        </div>
                    </figure>
                </a>
            </li>
            <li class="product-item">
                <a href="cadastro.html" target="_blank" class="product-link">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="img/people/4.jpg"width="220" height="210" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Micael</h2>
                            <p class="description">Trabalho com animais desde pequeno morava em uma fazenda com 23 cachorros e vários outros animais, então sei lidar com todos animais.</p>
                            <ul class="star-ranking">
                                <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png">
                                </li>
                                <li class="qtd-votes">
                                    </span>(20)</span>
                                </li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div><ins>R$80,00/Dia</ins></div>
                            </div>
                        </div>
                    </figure>
                </a>
            </li>
        </ul>
    </section>
    <br><br>
    <!----------------------------------- COMEÇO DA VITRINE - cuidador------------------------------------------>


    <!----------------------------------------------TIMELINE---------------------------------------------------->

    <h3>Consiga descontos incríveis em suas compras !</h3>
    <section class="timeline">
        
        <img src="img/cll.png" alt="imagem" class="timeline2">
        
        <div class="passos">
            <ul>
                <li class="passos2">
                    <h4>1º Passo</h4>
                    <p>Baixe nosso App, clicando no link ao lado. </p>
                </li>
                <li class="passos2">
                    <h4>2º Passo</h4>
                    <p>Faça login com seu email e senha, já cadastrados.</p>
                </li>
                <li class="passos2">
                    <h4>3º Passo</h4>
                    <p>Vá na aba...</p>
                </li>
            </ul>
        </div>
    </section>
    <!----------------------------------------------TIMELINE------------------------------------------------------->

    <!----------------------------------------- segunda vitrine --------------------------------------------------->
    <br><br>
    <section class="vitrine2">
        <h1 class="vitrine">Venha adquirir algum dos melhores produtos</h1>
        <ul class="product-list">
        <a href="login.html" target="_blank" class="product-link">
            <li class="product-item">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="img/product/prdPET.png" width="160" height="190" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Distribuidor de Alimentos</h2>
                            <p class="description">Alimentador de Estimação Cronometrado com Temporizador Programável, 1-4 Refeições por Dia.</p>
                            <ul class="star-ranking">
                                <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                                <li class="qtd-votes">
                                    </span>(15)</span>
                                </li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div> <ins>R$380,00</ins></div> 
                            </div>
                        </div>
                    </figure>
                </a>
            </li>
        </a>
        <li class="product-item">
            <a href="login.html" target="_blank" class="product-link">
                <figure class="product-info">
                    <div class="product-info-img">
                        <img src="img/product/produto2.png" alt="description image">
                    </div>
                    <figcaption class="product-info-description">
                        <h2 class="title">Coleira rastreadora</h2>
                        <p class="description">Este é um rastreador de animais de estimação muito bom. Com a função GPS, pode dizer onde o seu animal de estimação está a qualquer momento, evitando a perda do seu animal de estimação.</p>
                        <ul class="star-ranking">
                            <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                            <li class="qtd-votes">
                                </span>(50)</span>
                            </li>
                        </ul>
                    </figcaption>
                    <div class="price-box">
                        <div class="price">
                            <div><ins>R$194,00</ins></div>
                        </div>
                    </div>
                </figure>
            </a>
        </li>
        <li class="product-item">
            <a href="login.html" target="_blank" class="product-link">
                <figure class="product-info">
                    <div class="product-info-img">
                        <img src="img/product/produto3.png" alt="description image">
                    </div>
                    <figcaption class="product-info-description">
                        <h2 class="title">Tigela Inteligente</h2>
                        <p class="description">O pet se aproxima para beber encostando o focinho ou a patinha a água sobe preenchendo a parte de cima.</p>
                        <ul class="star-ranking">
                            <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                            <li class="qtd-votes">
                                </span>(20)</span>
                            </li>
                        </ul>
                    </figcaption>
                    <div class="price-box">
                        <div class="price">
                            <div>
                                <ins>R$190,00</ins>
                            </div>
                        </div>
                    </div>
                </figure>
            </a>
        </li>
        <li class="product-item">
            <a href="login.html" target="_blank" class="product-link">
                <figure class="product-info">
                    <div class="product-info-img">
                        <img src="img/product/produto4.png" alt="description image">
                    </div>
                    <figcaption class="product-info-description">
                        <br>
                        <h2 class="title">Banheiro inteligente </h2>
                        <p class="description"> Higiene, Praticidade e Segurança Para O Seu Pet O Sanitário Higiênico Tam G Para Cães é ideal para você ensinar seu pet a fazer xixi no lugar correto dando a ele um local. </p>
                        <ul class="star-ranking">
                            <li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/2kW5mnM/star.png"></li><li><img src="https://i.ibb.co/TwYYb93/star-1.png"></li>
                            <li class="qtd-votes">
                                </span>(25)</span>
                            </li>
                        </ul>
                    </figcaption>
                    <div class="price-box">
                        <div class="price">
                            <div>
                                <ins>R$420,00</ins>
                            </div>
                        </div>
                    </div>
                </figure>
            </a>
        </li>
        </ul>
    </section>
<!-----------------------------------------FINAL DA VITRINE------------------------------------------------------->


<!----------------------------------COMEÇO DAS PERGUNTAS FREQUENTES------------------------------------------------>
    <section class="perguntas">
        <div class="wrapper">
          <h1>Perguntas Frequentes</h1>
        
          <div class="lista-item">
            <input class="trigger-input" id="faq-titulo-1" type="checkbox">
            <div class="trigger-wrapper">
              <label for="faq-titulo-1">
                <h2 class="faq-titulo"><img src="img/fotinho.png" width="20px" height="20px">  Como posso me tornar um cuidador?</h2>
              </label>
              <p class="faq-conteudo">Todos os amantes de pets podem ser um cuidador, basta fazer o cadastro em nossa plataforma e responder um breve questionário. Nossa equipe analisará o seu perfil e em pouco tempo entraremos em contato.</p>
            </div>
          </div>
          <div class="lista-item">
            <input class="trigger-input" id="faq-titulo-2" type="checkbox">
            <div class="trigger-wrapper">
              <label for="faq-titulo-2">
                <h2 class="faq-titulo"><img src="img/fotinho.png" width="20px" height="20px">  Como adquiro o treinamento necessário?</h2>
              </label>
              <p class="faq-conteudo">Assim que o seu cadastro for efetivado, vc terá acesso a todo o suporte de nossa equipe.</p>
            </div>
          </div>
          <div class="lista-item">
            <input class="trigger-input" id="faq-titulo-3" type="checkbox">
            <div class="trigger-wrapper">
              <label for="faq-titulo-3">
                <h2 class="faq-titulo"><img src="img/fotinho.png" width="20px" height="20px">  Onde terei que trabalhar?</h2>
              </label>
              <p class="faq-conteudo">Você tem total controle do seu trabalho, escolhendo o que fazer e quando fazer, inclusive alguns serviços podem ser feitos em sua própria residência.</p>
            </div>
          </div>
          <div class="lista-item">
            <input class="trigger-input" id="faq-titulo-4" type="checkbox">
            <div class="trigger-wrapper">
              <label for="faq-titulo-4">
                <h2 class="faq-titulo"><img src="img/fotinho.png" width="20px" height="20px">  Como eu consigo clientes?</h2>
              </label>
              <p class="faq-conteudo">Não se preocupe com isso, nossa equipe de marketing faz toda essa parte por você através de anúncios, posts e influencers.</p>
            </div>
          </div>
          <div class="lista-item">
            <input class="trigger-input" id="faq-titulo-5" type="checkbox">
            <div class="trigger-wrapper">
              <label for="faq-titulo-5">
                <h2 class="faq-titulo"><img src="img/fotinho.png" width="20px" height="20px"> Como faço para receber?</h2>
              </label>
              <p class="faq-conteudo">Os pagamentos são realizados logo após o feedback do tutor do animalzinho que contratou o seu serviço, você pode transferir os valores de sua carteira digital em nossa plataforma para quaisquer outras instituições financeiras.</p>
            </div>
          </div>
        </div>
    </section>
<!---------------------------------------FINAL DAS PERGUNTAS FREQUENTES-------------------------------------->
    <footer>
        <section class="footer">
 
        <div class="icones">
            <div class="icone">
              <a><img src="img/icones/facebook.png" alt="facebook" class="contactimg"></a>
            </div>
            <div class="icone">
              <a><img src="img/icones/instagram.png" alt="instagram" class="contactimg"></a>
            </div>
            <div class="icone">
              <a><img src="img/icones/twitter.png" alt="twitter" class="contactimg"></a>
            </div>
            <div class="icone">
              <a><img src="img/icones/wats.png" alt="wats" class="contactimg"></a>
            </div>
            <div class="icone">
              <a><img src="img/icones/gmail.png" alt="wats" class="contactimg"></a>
            </div>
        </div>

    </footer>
</body>
</html>
<?php
}
?>

let cart = [];
let modalQt = 0;
let key = 0;
let modelsJson = [];

jQuery.ajax({
   url: "phpjs.php",
   dataType: "json",
   success: function(data) {
       if (Array.isArray(data)) {
           modelsJson = data.map((produto) => ({
               id: produto.ID_PROD.split(',').map((id) => parseInt(id)),
               name: produto.NOME_PROD,
               img: "data:imagem/jpeg;base64,"+produto.imagem_base64,
               price:parseFloat(produto.VALOR_PROD).toFixed(2) ,
               sizes: produto.qntd_prod.split(',').map((qntd_prod) => parseInt(qntd_prod)),
               
               description: produto.DESC_PROD

             
           }));
          

           // mapeando os dados recebidos e preenchendo a lista de produtos, modelos
           const c = (el)=>document.querySelector(el); //para localizar o primeiro item
           const cs = (el)=>document.querySelectorAll(el); //para localizar todos os itens
           modelsJson.map((item, index)=>{
             let cartQuantities = item.sizes;
            //Vamos pegar a estrutura HTML que tem a class 'models-item', 
            //dentro da class 'models' e clonar - true indica para pegar subitens
            //let modelsItem = document.querySelector('.models .models-item').cloneNode(true);
            //Depois de ajustado com a constante
            let modelsItem = c('.models .models-item').cloneNode(true);
            // preenchendo as informações dos modelos
            //acrescentar um identificador para a pizza - FrontEnd
            modelsItem.setAttribute('data-key', index);
            modelsItem.querySelector('.models-item--img img').src= item.img;
            modelsItem.querySelector('.models-item--price').innerHTML = `R$ ${item.price}`;
            //iniciar pelo nome -- o mais simples
            modelsItem.querySelector('.models-item--name').innerHTML = item.name;
            modelsItem.querySelector('.models-item--desc').innerHTML = item.description;
            //Adicionar o evento de click ao tag <a> que temos envolvendo a imagem e o "+"
            //Vai abrir o Modal - Janela
            modelsItem.querySelector('a').addEventListener('click', (e)=>{
                e.preventDefault(); //Previne a ação padrão que iria atualizar a tela
                //let key = e.target.closest('.models-item').getAttribute('data-key'); //pegando informação do identificador
                //Transforma a variável key em global.
                key = e.target.closest('.models-item').getAttribute('data-key'); //pegando informação do identificador
                modalQt = 1;
                modalQtbd=item.sizes;
                //Alimentando os dados do Modal
                c('.modelsBig img').src = modelsJson[key].img;
                c('.modelsInfo h1').innerHTML = modelsJson[key].name;
                c('.modelsInfo--desc').innerHTML = modelsJson[key].description;
                c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price}`;
            // ('.modelsInfo--size.selected').classList.remove('selected');
              /*  cs('.modelsInfo--size').forEach((size, sizeIndex)=>{
                    if(sizeIndex == 2) {
                        size.classList.add('selected');
                        c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price[sizeIndex]}`;
                    }
                    //size.innerHTML = modelsJson[key].sizes[sizeIndex];
                  //  size.querySelector('span').innerHTML = modelsJson[key].sizes[sizeIndex];
                });*/
                c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price}`;
                c('.modelsInfo--qt').innerHTML = modalQt;
                //Mostrar a janela Modal
                c('.modelsWindowArea').style.opacity = 0; //criando uma animação
                
                c('.modelsWindowArea').style.display = 'flex';
                setTimeout(()=> {
                    c('.modelsWindowArea').style.opacity = 1; //mostrando a janela, sem Timeout, não vemos o efeito
                }, 200);
            });
        
            //preenchendo as informações no site
            //Depois de ajustado com a constante
            //document.querySelector('.models-area').append(modelsItem);
            c('.models-area').append(modelsItem);
        });
        function closeModal(){
            c('.modelsWindowArea').style.opacity = 0; //criando uma animação
            setTimeout(()=> {
                c('.modelsWindowArea').style.display = 'none'; //fechando a janela, sem Timeout, não vemos o efeito
            }, 500);
            //mostrar o funcionamento via console do navegador, antes de atribuir aos botões
        }
        
        cs('.modelsInfo--cancelButton, .modelsInfo--cancelMobileButton').forEach((item)=>{
            item.addEventListener('click', closeModal);
        });
        
        c('.modelsInfo--qtmenos').addEventListener('click', ()=>{
            if(modalQt > 1) {
                modalQt--;
                c('.modelsInfo--qt').innerHTML = modalQt;
            }
        });
        
        c('.modelsInfo--qtmais').addEventListener('click', ()=>{
            if(modalQt<modalQtbd){
            modalQt++;
            c('.modelsInfo--qt').innerHTML = modalQt;}
        });
        
       /* cs('.modelsInfo--size').forEach((size, sizeIndex)=>{
            size.addEventListener('click', (e)=> {
                c('.modelsInfo--size.selected').classList.remove('selected');
                //e.target.classList.add('selected'); //ocorre erro se clicar no <span></span>
                size.classList.add('selected');
                
            });
        });*/
        

        c('.modelsInfo--actualPrice').innerHTML = `R$ ${modelsJson[key].price[modalQt]}`;
        
        c('.modelsInfo--addButton').addEventListener('click', ()=>{
            let identifier = modelsJson[key].id+'@';
            const locaId = cart.findIndex((item)=>item.identifier == identifier);
            
            let modalqtmax = modelsJson[key].sizes;
           
            if(locaId > -1){
                // item já existe no carrinho
                const maxQty = modalqtmax - cart[locaId].qt;
                if(modalQt > maxQty){
                  console.log("A quantidade máxima permitida foi atingida");
                  cart[locaId].qt = modalqtmax;
                } else {
                  cart[locaId].qt += modalQt;
                }
              } else {
                // item não existe no carrinho, adiciona normalmente
                if (modalQt > modalqtmax) {
                  console.log("A quantidade máxima permitida foi atingida");
                } else {
                  const item = {
                    id: modelsJson[key].id,
                    identifier,
                    qt: modalQt
                  };
                  cart.push(item);
                }
              }
              
              updateCart();
              closeModal();
              abrirCarrinho();
          });
          
        
        //ajustando o mobile
        const abrirCarrinho = () => {
            console.log('Qtd de itens no carrinho ' + cart.length)
            if(cart.length > 0) {
                // mostrar o carrinho
                seleciona('aside').classList.add('show')
                seleciona('header').style.display = 'flex' // mostrar barra superior
            }
        
            // exibir aside do carrinho no modo mobile
            seleciona('.menu-openner').addEventListener('click', () => {
                if(cart.length > 0) {
                    seleciona('aside').classList.add('show')
                    seleciona('aside').style.left = '0'
                }
            })
        }
        
        function updateCart() {
            c('.menu-openner span').innerHTML = cart.length;
            if(cart.length > 0) {
                c('aside').classList.add('show');
                c('.cart').innerHTML = ''; //limpo o carinho - visual
                //Fechando valores
                let subtotal = 0;
                let desconto = 0;
                let total = 0;
                cart.map((itemCart, index)=>{
                    let modelItem = modelsJson.find((itemBD)=>itemBD.id == itemCart.id);
                    subtotal += modelItem.price * itemCart.qt;
                 
                    //console.log(modelItem);
                    let cartItem = c('.models .cart--item').cloneNode(true);
                    //Alternativa
                 
                    cartItem.querySelector('img').src = modelItem.img;
                    //cartItem.querySelector('.cart--item-nome').innerHTML = `${modelItem.name} - ${modelItem.sizes[itemCart.size]}`;
                    cartItem.querySelector('.cart--item-nome').innerHTML = `${modelItem.name}`;
                    cartItem.querySelector('.cart--item--qt').innerHTML = itemCart.qt;
                    cartItem.querySelector('.cart--item-qtmenos').addEventListener('click',()=>{
                        if(itemCart.qt > 1) {
                            itemCart.qt--
                        } else {
                            cart.splice(index, 1);
                        }
                        updateCart();
                    });
                    modalQtbd=modelsJson[key].sizes;
           
                    if(modalQt<modalQtbd){
                    cartItem.querySelector('.cart--item-qtmais').addEventListener('click',()=>{
                        if(itemCart.qt < modalQtbd &  itemCart.qt >= modalQt){
                        itemCart.qt++;
                        updateCart();}
                        
                    });}
                    c('.cart').append(cartItem);
                });
                desconto = subtotal * 0.1;
                total = subtotal - desconto;
                c('.subtotal span:last-child').innerHTML = `R$ ${subtotal.toFixed(2)}`;
                c('.desconto span:last-child').innerHTML = `R$ ${desconto.toFixed(2)}`;
                c('.total span:last-child').innerHTML = `R$ ${total.toFixed(2)}`;
        
         
            } else {
                c('aside').classList.remove('show');
                c('aside').style.left = '100vw';
            }
        }


       } else {
           alert("O servidor retornou uma resposta inválida.");
       }
   },
   error: function(jqXHR, textStatus, errorThrown) {
       alert("Não foi possível acessar o servidor.");
   }
});

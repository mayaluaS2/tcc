$.ajax({
   url: "phpjs.php",
   dataType: "json",
   success: function(data) {
       let modelsJson = data.map((produto) => [{
           id: produto.ID_PROD,
           name: produto.NOME_PROD,
           img:produto.imagem,
           price: produto.VALOR_PROD,
           sizes: produto.QNT_PROD ,
           description:produto.DESC_PROD
         
          
       }]);

      
   }
});

function deleteOfwishlist(product){
    
    var id = parseInt(product.attr('name'))
    
    $.ajax({
        url : '../user/deleteOfwishlist.php',
        type : 'post',
        data:  'id_article='+id,
        dataType : 'html',
        success : function(htmlData,statut){    
          
            $("#tr"+id).remove();  
            
        },
        error : function(resultat, statut, erreur){
            $("#wishlist-info").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}

function addTocart(product){
    
    var id = parseInt(product.attr('name'))
     
    $.ajax({
        url : '../cart/ajouterArticlePanier.php',
        type : 'post',
        data:  'idArticle='+id+'& qte=1',
        dataType : 'html',
        success : function(htmlData,statut){    
            
           if(htmlData != ''){ 
                $("#cartContent #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContent #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                $("#cartContentSmallDevice #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContentSmallDevice #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                
                var nameProduct = $("#nameProduct"+id+" .product-title-spreed h4 a").text();
                $("#infos-addArticle").html(" a new product has been add to cart")
                $("#infos-cart-total").html("Cart Total :"+ $("#cartContent button .count-price-add").text());
                $("#cartAnimated").modal("show")
           }else{
            $("#cartBlock").modal("show")   
            
           } 
        },
        error : function(resultat, statut, erreur){
            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}
$("button#buttonTocart").click(function(){
    window.location.href = "../panier"
})
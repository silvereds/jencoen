$("button#buttonTocart").click(function(){
    window.location.href = "../panier"
})
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
                $("#infos-addArticle").html("<span class='text-uppercase'>"+nameProduct +"</span>a été ajouté au panier")
                $("#infos-cart-total").html(" Total Panier:"+ $("#cartContent button .count-price-add").text());
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

function addTocartWithQte(product){
    
    var id = parseInt(product.attr('name'))
     
    $.ajax({
        url : '../cart/ajouterArticlePanier.php',
        type : 'post',
        data:  'idArticle='+id+'& qte='+$("input#qteArticle").val(),
        dataType : 'html',
        success : function(htmlData,statut){
            
            if(htmlData != ''){ 
                $("#cartContent #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContent #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                $("#cartContentSmallDevice #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContentSmallDevice #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
             
                var animated = '<h6 style="font-weight:bold"><i class="fa fa-shopping-cart fa-4x mb-3 animated rotateIn"></i>\
                this product has added to cart<br> Total Panier:'+$("#cartContent button .count-price-add").text()+'</h6><br>\
                <button  class="btn-style cr-btn" style="border:none">\
                    <a href="cart.php">Mon panier</a>\
                </button>';

                $("#animateInModalDetailsProduct").html(animated);
            }else{
                $("#animateInModalDetailsProduct").html("<br><h5>votre panier est vérrouillé pour le moment vous avez lancé un processus de passation de commande en cour</h5>");
            } 
            
        },
        error : function(resultat, statut, erreur){
            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}

function deleteOfCart(product){
        
    var id = parseInt(product.attr('name'))
     
    $.ajax({
        url : '../cart/supprimerArticlePanier.php',
        type : 'post',
        data:  'idArticle='+id,
        dataType : 'html',
        success : function(htmlData,statut){
             
            window.location.reload(); 
        },
        error : function(resultat, statut, erreur){
            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}




function addToWishlist(product){
    
    var id = parseInt(product.attr('name'))
     
    $.ajax({
        url : 'user/addTowishlist.php',
        type : 'post',
        data:  'id_article='+id,
        dataType : 'html',
        success : function(htmlData,statut){    
            
                 
                
                var nameProduct = $("#nameProduct"+id+" .product-title-spreed h4 a").text();
                if(htmlData == ''){
                    $("#wishlist-info").html("<span class='text-uppercase'>"+nameProduct +"</span> a été ajouté dans votre wislist")
                }else{
                      if(htmlData == "IN_WISHLIST"){
                        $("#wishlist-info").html("<span class='text-uppercase'>"+nameProduct +"</span>existe déja dans votre wishlist")  
                      }else{
                        $("#wishlist-info").html("<span class='text-uppercase'>"+htmlData+"</span>")
                      }
                    ;
                }
                
                 
                $("#modal-wishlist").modal("show")
            
        },
        error : function(resultat, statut, erreur){
            $("#wishlist-info").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}





function addToWishlistInModal(product){
    
    var id = parseInt(product.attr('name'))
     
    $.ajax({
        url : '../user/addTowishlist.php',
        type : 'post',
        data:  'id_article='+id,
        dataType : 'html',
        success : function(htmlData,statut){    
            
                 
                
                var nameProduct = $("#nameProduct"+id+" .product-title-spreed h4 a").text();
                if(htmlData == ''){
                    $("#animateInModalDetailsProduct").html("<br><span class='text-uppercase alert alert-info'>"+nameProduct +"</span> a été ajouter dans votre wislist")
                }else{
                      if(htmlData == "IN_WISHLIST"){
                        $("#animateInModalDetailsProduct").html("<br><span class='text-uppercase alert alert-info'>"+nameProduct +"</span>existe déja dans votre wishlist")  
                      }else{
                        $("#animateInModalDetailsProduct").html("<br><span class='text-uppercase alert alert-info'>"+htmlData+"</span>")
                      }
                    ;
                }
                
                 
                //$("#modal-wishlist").modal("show")
            
        },
        error : function(resultat, statut, erreur){
            $("#animateInModalDetailsProduct").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
}






function updateCart(){
    var input = $("#tableOfArt input");
    var emptyField = false;
    var data=''
    if(input.length != 0){
        for(var i =0; i<input.length;i++){
            if(input[i].value == "")emptyField =true;
        }
        if(emptyField){
            $("#infos-update-cart").html("<p style='text-align:center;font-size:19px'>remplissez correctement tous les champs</p>")
        }else{
            
            for(var i =0; i<input.length;i++){
                if(i == 0){data = "input"+i+"="+input[i].value}else{data = data+"&input"+i+"="+input[i].value}   
            }
            $.ajax({
                url : 'cart/updateCart.php',
                type : 'post',
                data:  data,
                dataType : 'html',
                success : function(htmlData,statut){     
                   if(htmlData != ''){
                     $("#infos-update-cart").html("<p style='text-align:center;font-size:19px'>"+htmlData+"</p>")
                   }else{
                       window.location.reload();
                   }  
                     
                },
                error : function(resultat, statut, erreur){
                    $("#infos-update-cart").html('<span>erreur de connection au serveur recommencez...</span>'); 
                }
            })
        }

    }else{
        $("#infos-update-cart").html("<p style='text-align:center;font-size:19px'>your cart is empty</p>")
    }
}
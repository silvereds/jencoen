function showDetail(id){
    $.ajax({
            url : '../list-product/getInfosProduct.php',
            type : 'post',
            data:  'id='+id,
            dataType : 'json',
            success : function(htmlData,statut){
                
                data = JSON.stringify(htmlData)
                data = JSON.parse(data)
                
                if(data.data.length != 0){
                     
                     $("#nameArticle").text(data.data[0][0])
                     $("#priceArticle").text(data.data[0][1]+'fcfa')
                     $("#pubArticle").text(data.data[0][2])
                     $("#addToCart").attr('name',id)
                     $("#addToWishlist").attr('name',id)

                }  
                
            },
            error : function(resultat, statut, erreur){
                alert('erreur de connection au serveur recommencez...'); 
            }
        })   
                  

  }


  $("button#buttonTocart").click(function(){
           window.location.href = "../panier"
  })


  
function addTocartWithQte(product){
        
        var id = parseInt(product.attr('name'))
        
        $.ajax({
            url : '../cart/ajouterArticlePanier.php',
            type : 'post',
            data:  'idArticle='+id+'& qte='+$("input#qteArticle").val(),
            dataType : 'html',
            success : function(htmlData,statut){
                
                if(htmlData != ""){ 
                    $("#cartContent #buttonTocart .count-style").html(htmlData.split("+")[1])
                    $("#cartContent #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                    $("#cartContentSmallDevice #buttonTocart .count-style").html(htmlData.split("+")[1])
                    $("#cartContentSmallDevice #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                    
                    var nameProduct = $("#nameArticle").text();
                    $("#infos-addArticle").html("<span class='text-uppercase'>"+nameProduct +"</span> a été ajouté au panier")
                    $("#infos-cart-total").html("Total :"+ $("#cartContent button .count-price-add").text());
                    $("#cartAnimated").modal("show")
            }else{
                $("#cartBlock").modal("show")   
                
            }
            /*if(htmlData != ''){ 
                $("#cartContent #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContent #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
                $("#cartContentSmallDevice #buttonTocart .count-style").html(htmlData.split("+")[1])
                $("#cartContentSmallDevice #buttonTocart .count-price-add").html(htmlData.split("+")[0]+" fcfa")
             
                var animated = '<h6 style="font-weight:bold"><i class="fa fa-shopping-cart fa-4x mb-3 animated rotateIn"></i>\
                this product has added to cart<br> Cart Total :'+$("#cartContent button .count-price-add").text()+'</h6><br>\
                <button class="btn-style cr-btn" >\
                    your cart\
                </button>';

                $("#animateInModalDetailsProduct").html(animated);
            }else{
                $("#animateInModalDetailsProduct").html("<br><h5>cart is blocked please finalize your order or annule this");
            } */
                
                
            },
            error : function(resultat, statut, erreur){
                $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
            }
        })
    }

    function addToWishlist(product){
    
        var id = parseInt(product.attr('name'))
         
        $.ajax({
            url : '../user/addTowishlist.php',
            type : 'post',
            data:  'id_article='+id,
            dataType : 'html',
            success : function(htmlData,statut){    

                    var nameProduct = $("#nameArticle").text();
                    if(htmlData == ''){
                        $("#wishlist-info").html("<span class='text-uppercase'>"+nameProduct +"</span> a été ajouté dans la wislist")
                    }else{
                          if(htmlData == "IN_WISHLIST"){
                            $("#wishlist-info").html("<span class='text-uppercase'>"+nameProduct +"</span> existe déjà dans la wishlist")  
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
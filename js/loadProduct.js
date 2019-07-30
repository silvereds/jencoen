var product = new Array();
var nbblock;
var limit = parseInt("2") 
var numBlockActif = parseInt("1");

function modal(id){
  var i = parseInt(id);
  $("#exampleModal #title").text(product[i][1])
  $("#exampleModal #price").text(product[i][2]+'fcfa')
  $("#exampleModal #pub").text(product[i][4])
  $("#exampleModal #modal1 img").attr('src','../admin/administrators/build/images/upload/'+product[i][3])
  $("#exampleModal #modal2 img").attr('src','../admin/administrators/build/images/upload/'+product[i][5])
  $("#exampleModal #modal3 img").attr('src','../admin/administrators/build/images/upload/'+product[i][7])
  $("#exampleModal #modal11 img").attr('src','../admin/administrators/build/images/upload/'+product[i][3])
  $("#exampleModal #modal22 img").attr('src','../admin/administrators/build/images/upload/'+product[i][5])
  $("#exampleModal #modal33 img").attr('src','../admin/administrators/build/images/upload/'+product[i][7])
  $("#exampleModal #cart").attr('name',product[i][0])
  $("#exampleModal #wishlist").attr('name',product[i][0])
  
   
}

function constructBlock(image,name,price,idArticle,description,i){  
if(description == ""){
    var pub = "aucune publication"
}else{
    var pub = description
}

 return '<div class="product-width col-md-6 col-xl-4 col-lg-6">\
 <div class="product-wrapper mb-35" id=nameProduct'+parseInt(idArticle)+' style="box-shadow:0px 0px 0px 0px">\
     <div class="product-img">\
         <a href="../product-details?id='+idArticle+'">\
             <img src="'+image+'" alt="" class="image-responsive">\
         </a>\
         <div class="product-item-dec">\
             <ul>\
                 <li>2019</li>\
                 <li>ELECTRONIC\'S</li>\
                 <li>SDI</li>\
             </ul>\
         </div>\
         <div class="product-action">\
             <a class="action-plus-2 p-action-none" title="Add To Cart" href="#!" name="'+idArticle+'" onclick="addTocart($(this))">\
                 <i class=" ti-shopping-cart"></i>\
             </a>\
             <a class="action-cart-2" title="Wishlist" href="#!" name="'+idArticle+'" onclick="addToWishlist($(this))">\
                 <i class=" ti-heart"></i>\
             </a>\
             <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#!" \
             onclick="modal(\''+i+'\')">\
                 <i class=" ti-zoom-in"></i>\
             </a>\
         </div>\
         <div class="product-content-wrapper" style="background:rgba(249, 249, 249, 0.66)">\
             <div class="product-title-spreed">\
                 <h4><a href="product-details.html">'+name+'</a></h4>\
                 <span>6600 RPM</span>\
             </div>\
             <div class="product-price">\
                 <span>'+price+'fcfa</span>\
             </div>\
         </div>\
     </div>\
     <div class="product-list-details">\
         <h2><a href="product-details.html">'+name+'</a></h2>\
         <div class="quick-view-rating">\
             <i class="fa fa-star reting-color"></i>\
             <i class="fa fa-star reting-color"></i>\
             <i class="fa fa-star reting-color"></i>\
             <i class="fa fa-star reting-color"></i>\
             <i class="fa fa-star reting-color"></i>\
         </div>\
         <div class="product-price">\
             <span>'+price+'fcfa</span>\
         </div>\
         <p>'+pub+'</p>\
         <div class="shop-list-cart">\
             <a href="#!" onclick="addTocart($(this))" name="'+idArticle+'"><i class="ti-shopping-cart"></i> Add to cart</a>\
         </div>\
     </div>\
 </div>\
</div>'
   
}


function addToWislist(product){
  alert("wislist")
}

function nextBlock(){
            
        if(parseInt($("#pagination li")[3].firstChild.textContent) != nbBlock){
            $("#pagination li")[1].firstChild.textContent = parseInt($("#pagination li")[1].firstChild.textContent)+1
            $("#pagination li")[2].firstChild.textContent = parseInt($("#pagination li")[2].firstChild.textContent)+1
            $("#pagination li")[3].firstChild.textContent = parseInt($("#pagination li")[3].firstChild.textContent)+1
        }

        if(numBlockActif != nbBlock){
            numBlockActif = numBlockActif + 1
            for(var i=0;i<3;i++){ 
                if($("#pagination #button"+i+" a").text() != ""+numBlockActif+""){
                    $("#pagination #button"+i+" a").css({'background':'','color':''}) 
                }else{
                    $("#pagination #button"+i+" a").css({'background':'rgb(110,110,110)','color':'white'})
                }      
            }
            listblockByNum(numBlockActif)
        }
 
}


function prevBlock(){
  
        if(parseInt($("#pagination li")[1].firstChild.textContent) != 1){

            $("#pagination li")[1].firstChild.textContent = parseInt($("#pagination li")[1].firstChild.textContent)-1
            $("#pagination li")[2].firstChild.textContent = parseInt($("#pagination li")[2].firstChild.textContent)-1
            $("#pagination li")[3].firstChild.textContent = parseInt($("#pagination li")[3].firstChild.textContent)-1
        }

        if(numBlockActif != 1){
            numBlockActif = numBlockActif - 1
            for(var i=0;i<3;i++){ 
                if($("#pagination #button"+i+" a").text() != ""+numBlockActif+""){
                    $("#pagination #button"+i+" a").css({'background':'','color':''}) 
                }else{
                    $("#pagination #button"+i+" a").css({'background':'rgb(110,110,110)','color':'white'})
                }      
            }
            listblockByNum(numBlockActif)
        }
   
  }



function pagination(nbByBlock){

    nbArticles = product.length;

    if(parseInt(nbArticles/parseInt(nbByBlock)) == nbArticles/parseInt(nbByBlock) ){
       nbBlock = parseInt(nbArticles/parseInt(nbByBlock));
    }else{
       nbBlock = parseInt(nbArticles/parseInt(nbByBlock))+1;
    }

    var page=""

    if(nbBlock >3){

        page = page +  '<li class="active" onclick="prevBlock()"><a href="#!" name="suivant" ><i class="fa fa-angle-left"></i></a></li>'; 

        for(var i=0;i<3;i++){

            page = page +   '<li id="button'+i+'" style=""><a href="#!" onclick="listblock($(this))">'+(i+1)+'</a></li>'

        }

        page = page +  '<li class="active" onclick="nextBlock()"><a href="#!" name="suivant" ><i class="fa fa-angle-right"></i></a></li>';
        
    }else{

       
        for(var i=0;i < nbBlock ;i++){
            page = page +   '<li id="button'+i+'" style=""><a href="#!" onclick="listblock($(this))">'+(i+1)+'</a></li>'    
         }
         
    }

    $("#pagination").html(page); 

    $("#pagination  #button0 a").css({'background':'rgb(110,110,110)','color':'white'})
}



function listArticles(nbByBlock){

    pagination(nbByBlock)

     
    var block = "";
    var price;
    var i=0;
    var path;
    i = parseInt(i);
    while(i<nbByBlock && i < product.length){
        path = '../admin/administrators/build/images/upload/';
        block = block + constructBlock(path+product[i][3],product[i][1],product[i][2],product[i][0],product[i][4],i) 
        i++
    }
     
    $("#load").html(block);
    $("#load").focus()
}


function listblockByNum(numBlock){
   
    var i = parseInt(numBlock)
     
    var   limite = parseInt("0")
    var   nb = parseInt($("#input-limit").val())
    var price
    var block = ""

    limite = i*nb
    i = (i-1)*nb 
    
    while(i<limite && i<product.length){
         
        block = block + constructBlock('../admin/administrators/build/images/upload/'+product[i][3],product[i][1],product[i][2],product[i][0],product[i][4],i) 
        i++
    }
    $("#load").html(block);
    $("#load").focus()
}

function listblock(block){
    for(var i=0;i<3;i++){ 
     $("#pagination #button"+i+" a").css({'background':'','color':''}) 
    }

    block.css({'background':'rgb(110,110,110)','color':'white'}) 

    var i = parseInt(block.text())
    numBlockActif = parseInt(block.text())
    var   limite = parseInt($("#input-limit").val())
    var   nb = parseInt($("#input-limit").val());
    var price
    var block = ""

    limite = i*nb
    i = (i-1)*nb 
    
    while(i<limite && i<product.length){
        block = block + constructBlock('../admin/administrators/build/images/upload/'+product[i][3],product[i][1],product[i][2],product[i][0],product[i][4],i) 
        i++
    }
    $("#load").html(block);
    $("#load").focus()
}
 

function list(itemClick){
    this.id =  parseInt(itemClick.attr('name'))
    $.ajax({
        url : '../list-product/loadProductOnClick.php',
        type : 'post',
        data:  'id='+id+'& order='+$("#input-sort").val(),
        dataType : 'json',
        success : function(htmlData,statut){
            
            data = JSON.stringify(htmlData)
            data = JSON.parse(data)
            if(data.data.length != 0){
                product = data.data;
                listArticles($("#input-limit").val())
            }  
            
        },
        error : function(resultat, statut, erreur){
            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
         
}

$("#input-limit").change(function(){
    pagination($(this).val()) 
})
 
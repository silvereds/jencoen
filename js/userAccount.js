$("#save-first-adresse").click(function(){
  var form1 = $("#form1").serialize();
  $.ajax({
    url : '../user/updateFirstAdressUser.php',
    type : 'post',
    data:form1,
    dataType : 'html',
    success : function(htmlData,statut){
     
      $("#state-save-first-adresse").attr('hidden',false);
      $("#state-save-first-adresse").html(htmlData);
     
    },
    error : function(resultat, statut, erreur){
      $("#state-save-first-adresse").html('<span>erreur de connection au serveur recommencez...</span>'); 
    }
})

})

$("#cpassword").change(function(){
   if($(this)[0].checked){
     $("#form2").attr('hidden',false)
   }else{
    $("#form2").attr('hidden',true)
   } 
})

$("#save-newPassword").click(function(){
    var form2 = $("#form2").serialize();
     
    $.ajax({
      url : '../user/updatePasswordUser.php',
      type : 'post',
      data:form2,
      dataType : 'html',
      success : function(htmlData,statut){
       
        $("#state-save-newPassword").attr('hidden',false);
        $("#state-save-newPassword").html(htmlData);
       
      },
      error : function(resultat, statut, erreur){
        $("#state-save-newPassword").html('<span>erreur de connection au serveur recommencez...</span>'); 
      }
  })
})

$("#save-second-adress").click(function(){
  var form = $("#form3").serialize();
     
  $.ajax({
    url : '../user/updateDataOfSecondAdress.php',
    type : 'post',
    data:form,
    dataType : 'html',
    success : function(htmlData,statut){
     
      $("#state-save-second-adress").attr('hidden',false);
      $("#state-save-second-adress").html(htmlData);
     
    },
    error : function(resultat, statut, erreur){
      $("#state-save-second-adress").html('<span>erreur de connection au serveur recommencez...</span>'); 
    }
})
})

$("#show-order").click(function(){
   
      
  $.ajax({
    url : '../user/listOrder.php',
    type : 'post',
    data:'date='+$("#date").val(),
    dataType : 'html',
    success : function(htmlData,statut){
     
       
      $("#order-of-selected-date").html(htmlData);
     
    },
    error : function(resultat, statut, erreur){
      $("#order-of-selected-date").html('<span>erreur de connection au serveur recommencez...</span>'); 
    }
})
})

function goTofacture(fact){
   var infos = new Array()
   var nu_order=fact.attr('name');
   var tr = $("#block"+nu_order+" table tbody tr")
   var td;
   var data='';
   var inf = $("#billings-adress span")
   for(var i=0;i<tr.length;i++){
      td = tr[i].children    
     infos[i] ="line"+i+"1="+td[1].textContent+"&line"+i+"2="+td[2].textContent+" &line"+i+"3="+td[3].textContent+" &line"+i+"4="+td[4].textContent
     
   }

   for(var i=0;i<infos.length;i++){
     data = data +"&"+infos[i];
   }
   var inf = $("#billings-adress span");
   data = data+"&name="+inf[0].textContent+"&tel="+inf[1].textContent+"&ad1="+inf[2].textContent+"&ad2="+inf[3].textContent+"&ad3="+inf[4].textContent+"&ad4="+inf[5].textContent
    
   window.location.href="../facture?data="+data+""
}
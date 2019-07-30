$("#register-form").submit(function(e){
    e.preventDefault();
    var formRegister = $(this).serialize();
    $.ajax({
        url : '../user/verifyDataUser1.php',
        type : 'post',
        data:formRegister,
        dataType : 'html',
        success : function(htmlData,statut){
            if(htmlData == ""){
                document.location.href="../login-register2"
            }else{
                 $("#infos-creation-compte").attr('hidden',false);
                 $("#infos-creation-compte").html(htmlData);
            }
        },
        error : function(resultat, statut, erreur){
           alert('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
})

$("#login-form").submit(function(e){
    e.preventDefault();
    $("#infos-connexion").html("patientez...");
    
    var formLogin = $(this).serialize();
    
    $.ajax({
        url : '../user/verifyDataConnection.php',
        type : 'post',
        data:formLogin,
        dataType : 'html',
        success : function(htmlData,statut){
            if(htmlData == "checkout" || htmlData == "userAccount"){
                document.location.href="../"+htmlData+"?remember="+$("#remenber")[0].checked+"&pseudo="+$(".peudoValue").val();
            }else{
                 
                $("#infos-connexion").attr('hidden',false)
                $("#infos-connexion").html(htmlData);
            }
        },
        error : function(resultat, statut, erreur){
           alert('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
})

$("#forgot-password").submit(function(e){
    e.preventDefault();

    $("#infos-password").html("patientez...");

    var form = $(this).serialize();
    $.ajax({
        url : '../forgot_password/password.php',
        type : 'post',
        data:form,
        dataType : 'html',
        success : function(htmlData,statut){
          if(htmlData == "OK"){
            $("#infos-password").html('un code à 4 chiffres a été envoyer à cet email')
            $("#update-password").attr('hidden',false);
          }else{
                $("#infos-password").html(htmlData);
          }
          
            
        },
        error : function(resultat, statut, erreur){
            $("#infos-password").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
})

$("#update-password").submit(function(e){
    e.preventDefault();

    $("#infos-password-update").html("patientez...");

    var form = $(this).serialize();
    $.ajax({
        url : '../user/setNewPwdUser.php',
        type : 'post',
        data:form,
        dataType : 'html',
        success : function(htmlData,statut){
            if(htmlData == "checkout.php" || htmlData == "userAccount.php"){
                document.location.href=htmlData+"?remember="+$("#remenber")[0].checked+"&pseudo="+$(".peudoValue").val();
            }else{
                $("#infos-password-update").html(htmlData);
            }
          
            
        },
        error : function(resultat, statut, erreur){
            $("#infos-password-update").html('<span>erreur de connection au serveur recommencez...</span>'); 
        }
    })
})
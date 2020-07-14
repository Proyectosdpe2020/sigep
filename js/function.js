$(document).ready(function(){ 
    
    jQuery('#login-form').submit(login);
    
    function login(){

        $.ajax({  
            type: "POST",  
            url: "service/login.php", 
            dataType : 'json', 
            data: "data="+JSON.stringify({
                username: $("#user").val(),
                password: $("#pass").val()
            })
        }).done(function(response){

            if(response.state != "connection_fail"){

                if(response.user_data){
                    setSessionVariables('user', response.user_data);
                    showLoading(true);
                    redirectTo('main/index.php');
                }
                else{
                    /*blurt({
                        'title' : 'Usuario incorrecto', 
                        'text' : 'Usuario o contraseña incorrecto', 
                        'type' : 'error'
                    });*/
                    alert("Usuario incorrecto");
                }
            }
            else{
                /*blurt({
                    'title' : 'Falla de conexión', 
                    'text' : 'Ha fallado la conexión, porfavor intente de nuevo en unos momentos', 
                    'type' : 'error'
                });*/
                alert("Ha fallado la conexión, porfavor intente de nuevo en unos momentos");
            }
			
		});  
        
        return false;
    }
	
});

function setSessionVariables(type, data){

    $.ajax({  
        type: "POST",  
        url: "service/set_session_variables.php",  
        data: "data="+JSON.stringify({
            type: type,
            data: data
        })
    });  

    alert('sess');
    
    return false;
}

function showLoading(ind){
    if(ind)
        $(".loader-div").addClass("loader");
    else
        $(".loader-div").removeClass("loader");
}

function redirectTo(location){
    window.location = location;
}

jQuery(function($){
	$(document).bind("contextmenu",function(e){
        return false;
    });
   $("#CampoFecha").mask("99/99/9999",{placeholder:" "});
   $("#CampoTelefono").mask("99999999",{placeholder:" "});
   $("#CampoIsss").mask("999999999",{placeholder:" "});
   $("#CampoPasaporte").mask("a9999999",{placeholder:" "});
   $("#CampoAfp").mask("999999999999",{placeholder:" "});
   $("#CampoDui").mask("99999999-9",{placeholder:" "});
   $("#CampoNit").mask("9999-999999-999-9",{placeholder:" "});
   $("#CampoICE").mask("9999",{placeholder:" "});
   $("#CampoFCE").mask("9999",{placeholder:" "});
   $("#CampoIIN").mask("9999",{placeholder:" "});
   $("#CampoFIN").mask("9999",{placeholder:" "});
   $("#CampoIU").mask("9999",{placeholder:" "});
   $("#CampoFU").mask("9999",{placeholder:" "});
   $("#CampoIO").mask("9999",{placeholder:" "});
   $("#CampoFO").mask("9999",{placeholder:" "});
   $("#CampoIE").mask("9999",{placeholder:" "});
   $("#CampoFE").mask("9999",{placeholder:" "});
   $("#CampoDuiRP").mask("99999999-9",{placeholder:" "});
   $("#CampoTelefonoRP").mask("99999999",{placeholder:" "});
   $("#CampoDuiRL").mask("99999999-9",{placeholder:" "});
   $("#CampoTelefonoRL").mask("99999999",{placeholder:" "});
  
	 $("#terminarproceso").click(function(){
		  Sexy.confirm('<h1>¿Desea ingresar un nuevo curriculum?</h1><p>Pulse "Ok" para ingresar un nuevo curriculum, o pulse "Cancelar" para seguir con el actual curriculum.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				  location.href='2-nuevoaspirante.php';
				  }}});

		 });
	 $("#terminarprocesoactualizar").click(function(){
		  Sexy.confirm('<h1>¿Desea modificar un nuevo curriculum?</h1><p>Pulse "Ok" para modificar un nuevo curriculum, o pulse "Cancelar" para seguir con el actual curriculum.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){
				  location.href='3-editaraspirante.php';
				  }}});

		 });
});


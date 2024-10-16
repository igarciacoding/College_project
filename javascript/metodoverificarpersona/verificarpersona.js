jQuery(function($){
   $("#Entrar").click(function(e){
	 			$.ajax({
        			data: $("#Formulario").serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-verificarpersona/verificarpersona.php",
					success: function(mensaje){
						if(mensaje==null){
							Sexy.error('<h1>El dui o pasaporte ingresado no existe</h1><p>Click en OK, para continuar.</p>');return false;
						   }else{
							   document.Formulario.action = "editaraspirante.php";
							   document.Formulario.submit();					  
					}}
      		  });	
	    });
});
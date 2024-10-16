jQuery(function($){
   $("#Entrar").click(function(){
	 			$.ajax({
        			data: $("#Formulario").serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-verificarpersona/verificarsecretaria.php",
					error: function(){alert("asdasds")},
					success: function(mensaje){
						if(mensaje!=null){
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						   }else{
							  window.location='1-bienvenido.php';					  
					}}
      		  });	
	    });
	$("#password").keyup(function(e){
		var key=e.keyCode || e.which;
			if (key==13){
	 			$.ajax({
        			data: $("#Formulario").serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-verificarpersona/verificarsecretaria.php",
					error: function(){alert("asdasds")},
					success: function(mensaje){
						if(mensaje!=null){
							Sexy.error('<h1>'+mensaje+'</h1><p>Click en OK, para continuar.</p>');return false;
						   }else{
							  window.location='1-bienvenido.php';					  
					}}
      		  });
		}  
			  	
	 });	
});
jQuery(function($){
		
	$("#buscar").click(function(){
		if($("#id").val()!=''){
			$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-busquedas/busquedaporid.php",
					success: function(mensaje){
						$.each(mensaje,function(i,item){
							$("#persona").val(item.nombre+" "+item.apellido+" ------ "+item.id);
							$("#plaza").val(item.plaza);
							})
						}
      		  	 });
			   }
			   else{
		Sexy.info('<h1>Ingrese el dui/pasaporte del aspirante</h1><p>Click en OK, para continuar.</p>')
				}
			})
	$("#contratar").click(function(){
		if($("#persona").val()!=''&&$("#plaza").val()==''&&$("#plazas").val()!=''&&$("#id").val()!=''){
			$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-contratar/contratar.php",
					error: function(){
						alert("das");
						},
					success: function(mensaje){
						if(mensaje==null){
							$("#plaza").val($("#plazas").val());
							$("#id").val("");
		Sexy.info('<h1>Aspirante contratado!</h1><p>Click en OK, para continuar.</p>')		
							}
					}
      		   });
			}
			else{
		Sexy.info('<h1>Seleccione la persona y la plaza para contratarla</h1><p>Click en OK, para continuar.</p>')
				}
			
			})	
	$("#cambiar").click(function(){
		if($("#persona").val()!=''&&$("#plaza").val()!=''&&$("#plazas").val()!=''&&$("#id").val()!=''){
			$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-contratar/contratar.php",
					success: function(mensaje){
						if(mensaje==null){
							$("#plaza").val($("#plazas").val());
							$("#id").val("");
			Sexy.info('<h1>Plaza actualizada con exito</h1><p>Click en OK, para continuar.</p>')				
							}
					}
      		   });
			}else{
		Sexy.info('<h1>Seleccione la persona y la plaza para contratarla</h1><p>Click en OK, para continuar.</p>')
				}
			
		})
	$("#despedir").click(function(){
		if($("#persona").val()!=''&&$("#plaza").val()!=''&&$("#id").val()!=''){
			$.ajax({
        			data: $("#Calificar" ).serialize(),
        			type: "POST",
        			dataType: "json",
        			url: "../php/clase-contratar/despedir.php",
					success: function(mensaje){
						if(mensaje==null){
							$("#plaza").val("");
							$("#id").val("");
				Sexy.info('<h1>Personal despedido</h1><p>Click en OK, para continuar.</p>')			
							}
					}
      		   });
			}else{
		Sexy.info('<h1>Seleccione la persona para despedirla</h1><p>Click en OK, para continuar.</p>')
				}
		})
	});
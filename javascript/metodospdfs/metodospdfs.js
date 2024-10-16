jQuery(function($){
		$("#b1").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdftodos.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});
		$("#b2").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdftodosfechas.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});	
		$("#b3").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfconplaza.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});	
		$("#b4").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfconplazafecha.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});
		$("#b5").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfsinplaza.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});
		$("#b6").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfsinplazafecha.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});
		$("#b7").click(function(){
	Sexy.confirm('<h1>¿Desea eliminar los aspirantes del año seleccionado?</h1><p>Pulse "Ok" para eliminar, o pulse "Cancelar" para salir.</p>', { onComplete: 
            function(returnvalue) {
              if(returnvalue){ 
		document.Calificar.target = "_self";
		document.Calificar.action = "../pdf/listapdfsinplazaeliminarfecha.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			 }}});
			});	
		$("#b8").click(function(){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfselecciones.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			});
		$("#b9").click(function(){
			if($("#select option:selected").val()!=''){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfunaseleccion.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			}
			});
		$("#b10").click(function(){
			if($("#select2 option:selected").val()!=''){
		document.Calificar.target = "_new";
		document.Calificar.action = "../pdf/listapdfsegunplaza.php";
		document.Calificar.method = "POST";
		document.Calificar.submit();
			}
			});										
		})
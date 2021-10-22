$(document).ready(function(){

	$(".btn-sumbit").click(function(){
		var item = $(this);
		if(item.attr("id") == "frmStep1"){
			if($("#inpIMEI").length  == 0){
				$("#inpIMEI").addClass("error").focus();
				$(".msg-inpIMEI").empty().html("Debes ingresar un dato válido");
			}
			else{
				

				
				$("#inpIMEI").removeClass("error");
				$(".msg-inpIMEI").empty();
				
				$.ajax({
					url: siteURL+'/12850fe89f11e6d2a338f0e48a49aeb6.php',
					type: 'POST',
					async: true,
					data: {
						'data' : $("#inpIMEI").val()
					},
					dataType: 'json'
				})
				.done(function( data, textStatus, jqXHR ) {
					if ( console && console.log ) {
						var response = JSON.parse(data);

						if(response.imei.blocked == "NO"){
							if(response.deviceFeatures.band28 == "" && response.deviceFeatures.volteCapable == ""){
								alert("Tu equipo no es compatible con la red, comunicacte con nuestro centro de atención para opciones de contratación");
							}
							else{
								if(response.deviceFeatures.band28 == "SI"){
									if(response.deviceFeatures.volteCapable == "SI"){
										//alert("Tu equipo es compatible");
										$("#result1").modal("show");
									}
									else{
										alert("Continuar a contratación pero poner liga a vozapp");
									}
								}
								else{
									alert("Continuar a contratación pero poner liga a vozapp");
								}
							}
						}
						else{
							alert("El IMEI de tu equipo se encuentra bloqueado");
						}
					}
				})
				.fail(function( jqXHR, textStatus, errorThrown ) {
					if ( console && console.log ) {
						console.log( "La solicitud a fallado: " +  textStatus);
					}
				});
			}
			
		}
	});




	
});
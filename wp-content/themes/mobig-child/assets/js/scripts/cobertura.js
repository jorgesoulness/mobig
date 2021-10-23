$(document).ready(function(){

	$("#frmStep2").validate({
		errorElement: "div",
		errorClass: "error-line",
		rules: {
			inpNombre: 'required',
			Apellidos: 'required',
			inpEmail: {
				required: true,
				email: true
			},
			inpTel: {
				required: true,
				number: true
			},
			inpCalle: 'required',
			inpNoext: 'required',
			inpNoint: 'required',
			inpCP: 'required',
			inpCiudad: 'required',
			inpColonia: 'required',
			inpReferencia: 'required',
		},
		messages: {
			inpNombre: "<i class='fa fa-exclamation-triangle'><i>",
			Apellidos: "<i class='fa fa-exclamation-triangle'><i>",
			inpEmail: {
				required: "<i class='fa fa-exclamation-triangle'><i>",
				email: "<i class='fa fa-exclamation-triangle'><i>"
			},
			inpTel: {
				required: "<i class='fa fa-exclamation-triangle'><i>",
				number: "<i class='fa fa-exclamation-triangle'><i>"
			},
			inpCalle: "<i class='fa fa-exclamation-triangle'><i>",
			inpNoext: "<i class='fa fa-exclamation-triangle'><i>",
			inpNoint: "<i class='fa fa-exclamation-triangle'><i>",
			inpCP: "<i class='fa fa-exclamation-triangle'><i>",
			inpCiudad: "<i class='fa fa-exclamation-triangle'><i>",
			inpColonia: "<i class='fa fa-exclamation-triangle'><i>",
			inpReferencia: "<i class='fa fa-exclamation-triangle'><i>",
		},
		submitHandler: function (form) {
			var item = $(this);
			item.attr("disabled", "true");
			$(".msj-result2").hide();
			$("#result2").modal("show");
				setTimeout(function() { 
					url = item.attr("for");
					window.open(url, '_blank');
					return false;
				}, 4000);	
		}

	});

	$("#frmStep1").validate({
		errorElement: "div",
		errorClass: "error-line",
		rules: {
			inpIMEI: {
				required: true,
				matches: "^(\\d|\\s)+$",
				minlength: 15,
				maxlength: 16
			},
			mensaje: "required",
		},
		messages: {
			inpIMEI: {
				required: "<i class='fa fa-exclamation-triangle'><i>",
				matches: "<i class='fa fa-exclamation-triangle'><i>",
				minlength: "<i class='fa fa-exclamation-triangle'><i>",
				maxlength: "<i class='fa fa-exclamation-triangle'><i>"
			},
			mensaje: "<i class='fa fa-exclamation-triangle'><i>",
		},
		submitHandler: function (){
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
							//alert("Tu equipo no es compatible con la red, comunicate con nuestro centro de atención para opciones de contratación"); RESULT0
							$("#result0").modal("show");
						}
						else{
							if(response.deviceFeatures.band28 == "SI"){
								if(response.deviceFeatures.volteCapable == "SI"){
									//alert("Tu equipo es compatible"); RESULT1
									$("#result1").modal("show");
								}
								else{
									//alert("Continuar a contratación pero poner liga a vozapp"); RESULT2
									$(".msj-result2").show();
								}
							}
							else{
								//alert("Continuar a contratación pero poner liga a vozapp"); RESULT2
								$(".msj-result2").show();
							}
						}
					}
					else{
						//alert("El IMEI de tu equipo se encuentra bloqueado"); RESULT3
						$("#result3").modal("show");
					}
				}
			})
			.fail(function( jqXHR, textStatus, errorThrown ) {
				if ( console && console.log ) {
					console.log( "La solicitud a fallado: " +  textStatus);
				}
			});

		}
	});



	$(".validarOtro").click(function(){
		$(".step2").hide("slow");
		$(".step1").show("slow");
		$("#inpIMEI").val("");
		$(".msg-inpIMEI").empty();
		$("#result1").modal("hide");
	});

	$(".forStep2").click(function(){
		$(".step1").hide("slow");
		$(".step2").show("slow");
		$("#result1").modal("hide");
	});

	
});
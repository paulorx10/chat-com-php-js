$(document).ready(function(){

	$(".list_amigos ul li a").click(function(){

		var id = $(this).attr("id");

		$(".id_amigo").val(id);

		setTimeout(function(){

			var get_amigo = $(".id_amigo").val();
		
			if(get_amigo != ""){
			
			var id_receive_return = $(".id_amigo").val();
			
				$.post('retorna_sms.php',{"id_receive":id_receive_return}, function(data){

					$(".mensagens").show();
					$(".mensagens").html(data);
				});

			}

		}, 1000);
	});

	//send sms on click 
	$(".btn_send").click(function(){

		$(".mensagens").show();

		var sms = $(".sms").val();
		var id_receive = $(".id_amigo").val();
		//var my_id = $();
		
		$.post('enviar_sms.php',{"sms":sms, "id_receive": id_receive}, function(data){

			$(".return_sms").html("<p>Enviando sms</p>");
			
			setTimeout(function(){

				$(".return_sms").html(data);
			
			}, 2000);
		});
	});

	//return sms
	setInterval(function(){

		var get_amigo = $(".id_amigo").val();
		
		if(get_amigo != ""){
		
		var id_receive_return = $(".id_amigo").val();
		
			$.post('retorna_sms.php',{"id_receive":id_receive_return}, function(data){

				$(".mensagens").html(data);

			});

		}

	}, 1000); 

});

function sendSms(event) {
    var x = event.which || event.keyCode;
    if(x == 13){
	    $(".mensagens").show();

			var sms = $(".sms").val();
			var id_receive = $(".id_amigo").val();
			//var my_id = $();
			
			$.post('enviar_sms.php',{"sms":sms, "id_receive": id_receive}, function(data){

				$(".return_sms").html("<p>Enviando sms</p>");
				
				setTimeout(function(){

					$(".return_sms").html(data);
				
				}, 2000);
			});
		}
	}
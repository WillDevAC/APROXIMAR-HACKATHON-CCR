
$(document).ready(function() {
	$('#salvarcadastro').on('click', function(){

		let nome = $("#nome").val();
		let email = $("#email").val();
		let senha = $("#senha").val();

		if(nome == "" && email == "" && senha == "")
		{
			$("#mensagens").html("<p style='color: red'>Oiii, parace que você esqueceu de preencher alguns campos =D</p>");
		}else{
		  $.ajax({
		  	url: 'http://localhost/Aproximar/app/ajax/insert.php',
		  	type: 'POST',
		  	data:{
		  		nome: nome,
		  		email: email,
		  		senha: senha,
		  	},
		  })	
		  .done(function() {
		  	$("#mensagens").html("<p style='color: pink'>Parabens!!! Agora você faz parte da comunidade aproximar =D<p>");
		  	$("#nome").val("");
		  	$("#email").val("");
		  	$("#senha").val("");
		  })
		  .always(function() {
		  	$("#mensagens").html("<p style='color: pink'>Parabens!!! Agora você faz parte da comunidade aproximar =D<p>");
		  	$("#nome").val("");
		  	$("#email").val("");
		  	$("#senha").val("");
		  });
		}
	})
})




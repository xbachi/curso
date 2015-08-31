$(document).ready(function(){
	$("#nom").val("Pablo");
	$("#email").val("pablo@xeven.com.ar");
	$("#pwd,#pwd2").val("test");
	$("#NuevoUsuario").submit(function(){
		return validar();
	});
	$( ".errores,.loginError" ).dialog({
      		autoOpen: false,
		resizable: false,

		modal: true,
		buttons: {
			"OK": function() {
			$(this).dialog( "close" );
			}
		}
	});
	/*
	$("#loginForm").submit(function(e){
		e.preventDefault();
		$.post("ingresar.php",{userL:$("#userL").val(),pwdL:$("#pwdL").val()},function(d){
		if(d=="OK"){window.location.replace("index.php");}else{$("#pwdL,#userL").val("");$("#userL").focus();$(".loginError").dialog("open");}
		});
		return false;
	});
	*/
});

function validar(){
	$("#dialogoErrores").html("");
	if($("#pwd").val()!=$("#pwd2").val() || $("#pwd").val()==""){
		$("#dialogoErrores").append("Las contraseñas no coinciden.<br/>");
		$("#pwd2,#pwd").val("");
		$("#pwd").focus()
	}
	if($("#email").val()==""){
		$("#dialogoErrores").append("El email no puede estar vacio.<br/>");
		$("#nom").focus();
	}
	if($("#nom").val()==""){
		$("#dialogoErrores").append("El nombre no puede estar vacio.<br/>");
		$("#nom").focus();
	}
	if($("#dialogoErrores").html()!=""){
		$(".errores").dialog("open");
		return false;
	}else{return true;}
}

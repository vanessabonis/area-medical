
/*HIDE NÃO TÁ FUNCIONANDO*/
function hide(){
	var x = document.getELementById("myInput");
	var y = document.getELementById("hide1");
	var z = document.getELementById("hide2");
	
	if (x.type == 'password') {
		x.type = "text";
		y.style.display = "block";
		z.style.display = "none";
	}else{
		x.type = "password";
		y.style.display = "none";
		z.style.display = "block";
	}

}


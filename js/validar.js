function validar(){
	var nombre, mensaje;
	nombre = document.getByElementaId("nombre").value;
	mensaje = document.getByElementaId("mensaje").value;


	if (nombre == "" || mensaje === "") {
		alert("El campo esta vacio");
		return false;
	}

	else if (nombre.legth>20) {
		alert("El nombre es muy largo");
		return false;
	}

	else if (mensaje.legth>50) {
		alert("El mensaje es muy largo");
		return false;
	}

}
function inputMark(clase) {
	var input = document.getElementsByClassName(clase);
	for( var campo of input) {
		campo.onchange = function() {
			this.style.background = "rgb(250, 255, 189)";
		}
	}
}

inputMark("login-user");
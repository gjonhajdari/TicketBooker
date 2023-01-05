$(document).ready(() => {

	$("#burger-menu").click(() => {
		$(".middle").toggle();
		$(".right").toggle();
	})

});

/*
-------------------------------------------------
Password hide-show ------------------------------------
-------------------------------------------------
*/
function togglePw(){
	var password = document.querySelector('[name=password]');

	if(password.getAttribute('type')==='password'){
		password.setAttribute('type', 'text');
		document.getElementById("font").style.color='green';
	}
	else{
		password.setAttribute('type', 'password');
		document.getElementById("font").style.color='red';
	}
}


function togglepw(){
	var password = document.querySelector('[name=password]');

	if(password.getAttribute('type')==='password'){
		password.setAttribute('type', 'text');
		document.getElementById("font").style.color='green';
	}
	else{
		password.setAttribute('type', 'password');
		document.getElementById("font").style.color='red';
	}
}

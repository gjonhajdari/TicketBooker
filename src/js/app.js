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
	var password = document.querySelector('[name=Password]');

	if(password.getAttribute('type')==='Password'){
		password.setAttribute('type', 'text');
		document.getElementById("fonti").style.color='green';
	}
	else{
		password.setAttribute('type', 'Password');
		document.getElementById("fonti").style.color='red';
	}
}
/* ---------------------------------------
-------Password hide and show ------------
-----------------------------------------*/

function myfunnction() {
	var x = document.getElementById("myInput");
	if (x.type === "password") {
	  x.type = "text";
	} else {
	  x.type = "password";
	}
 }

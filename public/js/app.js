$(document).ready(() => {
	// Navbar links dropdown
	$("#burger-menu").click(() => {
		$(".middle").toggle();
		$(".right").toggle();
	});


	// Toggle password function
	$('#toggle-visibility').on('click', function(e) {
		e.preventDefault;
		const password = document.querySelector('#passwordInput');
		const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
		password.setAttribute('type', type);
		// toggle the eye icon
		this.classList.toggle('fa-eye');
	});
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

//create account alert

function error(){
	alert("Can't create an account because there is no database")
}


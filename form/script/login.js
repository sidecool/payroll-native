var button = document.getElementById('mainButton');
var username = document.getElementById('username');
var password = document.getElementById('password');

var openForm = function() {
	button.className = 'active';	
};

var checkInput = function(input) {
	if (input.value.length > 0) {
		input.className = 'active';
	} else {
		input.className = '';
	}
};

var closeForm = function() {
	button.className = '';
};

var validasiUser = function() {
	username.setCustomValidity('Silahkan Masukkan Username');
}

var validasiPassword = function() {
	password.setCustomValidity('Silahkan Masukkan Password');
}

var input = function(input) {
	input.setCustomValidity('');
}

document.addEventListener("keyup", function(e) {
	if (e.keyCode == 27) {
		closeForm();
	}
});
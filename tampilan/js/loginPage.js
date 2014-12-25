function login(username, password){
	var dataYgDiKirim;
	if(username===undefined||password===undefined)
		dataYgDiKirim = $('#login-form').serialize();
	else
		dataYgDiKirim = 'username='+username+'&password='+password;
	$.ajax({
		type: 'POST',
		url: 'sistem/ajax/login.php',
		data: dataYgDiKirim,
		success: function(data){
			if(data=='true'){
				window.location = '?page=home';
			}
			else{
				alert("Password salah!");
			}
		}
	});

	return false;
}

function sign_up(){
	$.ajax({
		type: 'POST',
		url: 'sistem/ajax/sign_up.php',
		data: $('#sign_up_form').serialize(),
		success: function(data){
			if (data=='true') {
				var username = $('#sign_up_form #username').val();
				var password = $('#sign_up_form #password').val();
				login(username,password);
			}
			else{
				alert(data);
			}
		},
		error: function(data){
			alert('Sign up gagal!');
		}
	});

	return false;
}
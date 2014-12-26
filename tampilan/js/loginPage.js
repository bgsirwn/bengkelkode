function login(username, password){
	var dataYgDiKirim;
	if(username===undefined||password===undefined)
		dataYgDiKirim = $('#login-form').serialize();
	else
		dataYgDiKirim = 'username='+username+'&password='+password;
	$.ajax({
		type: 'POST',
		url: 'login/auth',
		data: dataYgDiKirim,
		success: function(data){
			if(data=='true'){
				window.location = 'home';
			}
			else{
				alert("Password salah!\n"+password+"\n"+username);
			}
		}
	});

	return false;
}

function signup(){
	$.ajax({
		type: 'POST',
		url: 'signup/auth',
		data: $('#signup-form').serialize(),
		success: function(data){
			if (data=='true') {
				var username = $('#signup-form #username').val();
				var password = $('#signup-form #password').val();
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
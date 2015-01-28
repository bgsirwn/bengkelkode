<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			Confirm your account by clicking the link below! Have fun!
			<a href="{{route('confirmation', array(Auth::user()->confirmation))}}">{{route('confirmation', array(Auth::user()->confirmation))}}</a>
		</div>
	</body>
</html>

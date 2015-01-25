<?php
return [
	// Enter your site key here. Don't have a key yet? Get one over at https://www.google.com/recaptcha/
	'siteKey' => getenv('6LfcyAATAAAAANn-2AWc00S8rD4CTmYww-aiwxYa') ?: '6LfcyAATAAAAANn-2AWc00S8rD4CTmYww-aiwxYa',

	// Enter your secret key here. Don't have a key yet? Get one over at https://www.google.com/recaptcha/
	'secretKey' => getenv('6LfcyAATAAAAAPPKm44AHXaYauK_py372rL3Fdu6') ?: '6LfcyAATAAAAAPPKm44AHXaYauK_py372rL3Fdu6',

	// Normally, we use curl to send an api request to Google. If this fails, we can use file_get_contents instead.
	// Set this to false to try with file_get_contents instead of curl.
	'curl' => false
];
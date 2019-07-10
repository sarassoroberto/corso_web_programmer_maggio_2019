https://developer.hyvor.com/tutorials/php/forms-finishing



function validate($str) {
		return trim(htmlspecialchars($str));
	}


function (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
			$nameError = 'Name can only contain letters, numbers and white spaces';
		}


	if (empty($_POST['email'])) {
		$emailError = 'Please enter your email';
	} else {
		$email = validate($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
			$emailError = 'Invalid Email';
		}
	}
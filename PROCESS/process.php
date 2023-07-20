<?php	
	if($_POST['submit'])
	{
		$name = $_POST['name'];
		$email= $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
			$email = "$email";
			$subject = "Welcome To Our site";
			$body = "Name Is:: $name
E-mail is :: $email
subject :: $subject
message Is :: $message";

			$headers = "From: kishanyadav2093@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
				echo "<script>window.location='index.php'</script>";
			} 
	}
?>
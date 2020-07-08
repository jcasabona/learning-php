<?php 
	require_once 'inc/header.php'; 
	$form_data = $_POST ?? null; 	
	$form_is_complete = true;

	function check_required( $value ) {
		if( empty( trim( $value ) ) ) {
			echo '<p class="alert">This is a required field.</p>';
			$_GLOBALS['form_is_complete'] = false;
		} 
	}

	function check_email( $email ) {
		$regex= '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
		if ( ! preg_match( $regex, $email ) ) {
			echo '<p class="alert">You did not input a valid email address.</p>';
			$_GLOBALS['form_is_complete'] = false;
		}
	}

	function join_mailing_list( $form_data ) {

		//Prep Data
		$name = filter_var( strip_tags( trim( $form_data['name'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$email = filter_var( $form_data['email'], FILTER_SANITIZE_EMAIL );
		$from = "Joe Casabona <joe@casabona.org>";
		$to = "$name <$email>";
		$subject = "You're on the list!";
		$message = "Hey $name, \n\n Thanks so much for joining my mailing list! You'll get news, tips, and tricks weekly! \n\ Joe";

		$headers = 'From: ' . $from . "\r\n" .
    		'Reply-To: ' . $from . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
		
		//Send Confirmation Email
		mail( $to, $subject, $message, $headers );

		//Write Data to File.
		$entry = "$name, $email \n";
		file_put_contents( 'mailing-list.txt', $entry, FILE_APPEND );
		
		echo "<h3>Thanks! You're on the list!</h3>";
	
	}
	
?>
    <h2>Join Mailing List</h2>
	<form name="contact" method="POST">
		<div>
			<?php if ( ! empty( $form_data ) ) check_required( $form_data['name'] ); ?>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
		</div>
		<div>
			<?php if ( ! empty( $form_data ) ) check_required( $form_data['email'] ); ?>
			<label for="email">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php 
	if ( true === $form_is_complete && ! empty( $form_data ) ) {
		join_mailing_list( $form_data );
	}

	require_once 'inc/footer.php';

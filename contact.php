<?php require_once 'inc/header.php'; ?>
    <h2>Contact <?php echo $author; ?></h2>
   
	<form name="contact" method="POST" action="process.php">
		<input type="text" name="name" placeholder="Your Name" />
		<input type="email" name="email" placeholder="Your Email" />
		<textarea name="message"></textarea>
		<input type="submit" name="submit" value="Submit" />
	</form>

<?php require_once 'inc/footer.php'; ?>

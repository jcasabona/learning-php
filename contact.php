<?php require_once 'inc/header.php'; ?>
    <h2>Contact <?php echo $author; ?></h2>
   
	<form name="contact" method="POST" action="process.php">
		<div>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" />
		</div>
		<div>
			<label for="name">Email:</label> <input type="email" name="email" placeholder="Your Email" />
		</div>
		<div>
			<p>Reason for Contact:</p>
			<input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
			<input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
			<input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
		</div>
		<div>
			<p>What's your favorite movie?</p>
			<select name="movie" id="movie">
				<option value="Star Wars">The first Star Wars</option>
				<option value="Another Star Wars">Another Star Wars movie</option>
				<option value="none">I don't like movies</option>
			</select>
		</div>
		<div>
			<label for="message">What's your message?</label>
			<textarea name="message"></textarea>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php require_once 'inc/footer.php'; ?>

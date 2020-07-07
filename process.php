<?php require_once 'inc/header.php'; ?>
    <h2>Form Results</h2>

	<?php
	/**8.1 POST vs. GET */
	var_dump( $_POST );

	/** 8.2 Basic Elements */
	foreach( $_POST as $name => $value ) {
		if ( 'submit' != $name ) {
		 echo '<p><strong>' . ucfirst( $name ) . ':</strong> ' . $value . '</p>';
		}
	}
	?>
<?php require_once 'inc/footer.php'; ?>
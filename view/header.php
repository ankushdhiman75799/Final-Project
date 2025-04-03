<nav>
	<a href="session_example.php">Home</a> | 
	<a href="session_example.php?action=forget">Forget Me</a>
	<?php
	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
	    echo ' | <a href="session_example.php?action=Change Values">Change Values</a>';
	}
	?>
</nav>


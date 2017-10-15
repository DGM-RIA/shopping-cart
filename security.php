<?php
if (!isset($_COOKIE['email'])) {
	echo '<p>Please <a href="admin.php">Log in</a> to access this page</p>';
	exit();
}
?>
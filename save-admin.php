<?php
// connection
require './inc/database.php';

// sanitize inputs
$first_name = htmlspecialchars(trim($_POST['first_name']));
$last_name = htmlspecialchars(trim($_POST['last_name']));
$username = htmlspecialchars(trim($_POST['username']));
$password = $_POST['password'];
$confirm = $_POST['confirm'];

// validate inputs
$ok = true;
require './inc/header.php';

if (empty($first_name)) {
	echo '<p>First name required</p>';
	$ok = false;
}
if (empty($last_name)) {
	echo '<p>Last name required</p>';
	$ok = false;
}
if (empty($username)) {
	echo '<p>Username required</p>';
	$ok = false;
}
if (empty($password) || ($password != $confirm)) {
	echo '<p>Passwords do not match</p>';
	$ok = false;
}

// decide if we are saving or not
if ($ok) {
	try {
		// Hash the password securely
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		// Use prepared statements to prevent SQL injection
		$sql = "INSERT INTO phpadmins (first_name, last_name, username, password) VALUES (:first_name, :last_name, :username, :password)";
		$stmt = $conn->prepare($sql);

		// Bind parameters
		$stmt->bindParam(':first_name', $first_name);
		$stmt->bindParam(':last_name', $last_name);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $hashed_password);

		// Execute the query
		$stmt->execute();

		echo '<section class="success-row">';
		echo '<div>';
		echo '<h3>Admin Saved</h3>';
		echo '</div>';
		echo '</section>';
	} catch (PDOException $e) {
		// Handle database errors gracefully
		echo '<p>Error saving admin: ' . $e->getMessage() . '</p>';
	}

	// Disconnect
	$conn = null;
}
?>
<section class="row success-back-row">
	<div>
		<p>All setup, click the button below to head to the sign-in page!</p>
		<a href="signin.php" class="btn btn-primary">Sign In</a>
	</div>
</section>
<?php require './inc/footer.php'; ?>
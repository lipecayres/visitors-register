<?php
// Start session
session_start();

// Store the user inputs in variables
$username = $_POST['username'];
$password = $_POST['password']; // Plain text password from the form

// Connect to the database
require 'database.php';

try {
	// Set up the query to find the user by username
	$sql = "SELECT user_id, password FROM phpadmins WHERE username = :username";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':username', $username);
	$stmt->execute();

	// Fetch the user data
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($user) {
		// Verify the plain text password with the hashed password in the database
		if (password_verify($password, $user['password'])) {
			// Password is correct, log the user in
			$_SESSION['user_id'] = $user['user_id']; // Store user ID in session
			Header('Location: ../CRUD/read.php'); // Redirect to the protected page
			exit;
		} else {
			// Invalid password
			echo 'Invalid Login: Incorrect password.';
		}
	} else {
		// No user found with the provided username
		echo 'Invalid Login: Username does not exist.';
	}
} catch (PDOException $e) {
	echo 'Error: ' . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
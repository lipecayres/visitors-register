<?php
try {
	$conn = new PDO('mysql:host=localhost;dbname=visitors_register_db', 'root', '');
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
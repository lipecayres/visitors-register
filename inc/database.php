<?php
try {
	$conn = new PDO('mysql:host=sql303.infinityfree.com;dbname=if0_37732471_visitors_register_db', 'if0_37732471', 'rP0KG4H1ExfrPMv');
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>

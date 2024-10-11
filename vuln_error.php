<?php
// Error display enabled (dangerous in production)
ini_set('display_errors', 1); // Vulnerable!
ini_set('log_errors', 0);

try {
    $result = 10 / 0; // Trigger an error
} catch (Exception $e) {
    echo $e->getMessage(); // Displays error to the user
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Improper Error Handling</title>
</head>
<body>
    <h2>Improper Error Handling</h2>
    <p>Check for errors above</p>
</body>
</html>

<?php
session_start();

// Insecure session fixation and improper session handling
if (isset($_GET['session_id'])) {
    session_id($_GET['session_id']); // Allows session fixation attacks
}

// Storing sensitive information insecurely in session
$_SESSION['user'] = 'admin';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insecure Session Management</title>
</head>
<body>
    <h2>Insecure Session Management</h2>
    <p>Session ID: <?php echo session_id(); ?></p>
    <p>Logged in as: <?php echo $_SESSION['user']; ?></p>
    <form method="GET">
        <input type="text" name="session_id" placeholder="Set Session ID">
        <button type="submit">Set Session ID</button>
    </form>
</body>
</html>

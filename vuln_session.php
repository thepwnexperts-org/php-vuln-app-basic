<?php
// Set the session save path dynamically
$session_save_path = __DIR__ . '/sessions'; // Ensure this directory exists and is writable

// Create the sessions directory if it doesn't exist
if (!is_dir($session_save_path)) {
    mkdir($session_save_path, 0775, true);
}

// Change the session save path
session_save_path($session_save_path);
session_start();

// Insecure session fixation and improper session handling
if (isset($_GET['session_id'])) {
    session_id($_GET['session_id']); // Allows session fixation attacks
    session_start(); // Start the session again with the new session ID
}

// Storing sensitive information insecurely in session
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'admin'; // Initialize user session if not set
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insecure Session Management</title>
</head>
<body>
    <h2>Insecure Session Management</h2>
    <p>Session ID: <?php echo htmlspecialchars(session_id(), ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Logged in as: <?php echo htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8'); ?></p>
    <form method="GET">
        <input type="text" name="session_id" placeholder="Set Session ID" required>
        <button type="submit">Set Session ID</button>
    </form>
</body>
</html>

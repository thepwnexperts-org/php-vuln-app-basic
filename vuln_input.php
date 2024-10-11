<!DOCTYPE html>
<html>
<head>
    <title>No Input Validation</title>
</head>
<body>
    <h2>XSS via Unescaped Input</h2>
    <form method="POST">
        <input type="text" name="input" placeholder="Enter some input">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        // No input validation or sanitization (XSS vulnerability)
        echo "You entered: " . $input; // XSS vulnerability!
    }
    ?>
</body>
</html>

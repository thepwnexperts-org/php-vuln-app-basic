 
<?php
// Dangerous use of eval (executes arbitrary PHP code)
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    // Vulnerable: eval() runs user input as code, leading to code injection
    eval($input); // Vulnerable!
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable eval()</title>
</head>
<body>
    <h2>Dangerous eval() Example</h2>
    <form method="POST">
        <input type="text" name="input" placeholder="Enter PHP code">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

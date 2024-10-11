<?php
// Vulnerable file inclusion (no input validation)
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    include($page); // Vulnerable to Local File Inclusion (LFI) and Remote File Inclusion (RFI)
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insecure File Inclusion</title>
</head>
<body>
    <h2>File Inclusion Vulnerability</h2>
    <form method="GET">
        <input type="text" name="page" placeholder="Enter filename">
        <button type="submit">Include</button>
    </form>
</body>
</html>


<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // No file validation (dangerous)
    move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']); // Vulnerable!
    
    echo "File uploaded: " . $file['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insecure File Upload</title>
</head>
<body>
    <h2>File Upload Vulnerability (RCE)</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>

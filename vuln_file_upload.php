<?php
// Set the upload directory dynamically
$upload_dir = __DIR__ . '/uploads/'; // Ensure this directory exists and is writable

// Create the uploads directory if it doesn't exist
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0775, true);
}

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // No file validation (dangerous)
    move_uploaded_file($file['tmp_name'], $upload_dir . $file['name']); // Vulnerable!

    echo "File uploaded: " . htmlspecialchars($file['name'], ENT_QUOTES, 'UTF-8');
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
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

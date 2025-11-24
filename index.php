<?php
$filename = "page.html";

$html = "
<!DOCTYPE html>
<html>
<head>
    <title>My Generated Page</title>
</head>
<body>
    <h1>Hello from PHP!</h1>
    <p>This HTML file was created automatically.</p>
</body>
</html>
";

// Create or overwrite the HTML file
if (file_put_contents($filename, $html) !== false) {
    echo "HTML file '$filename' created successfully!";
} else {
    echo "Error creating HTML file.";
}
?>

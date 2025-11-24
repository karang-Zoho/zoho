<?php
$filename = "page.html";

// Get the HTML content from Deluge parameter (POST or GET)
$html = isset($_POST['html_content']) ? $_POST['html_content'] :
        (isset($_GET['html_content']) ? $_GET['html_content'] : "");

// Check if data received
if (!empty($html)) {
    if (file_put_contents($filename, $html) !== false) {
        echo "HTML file '$filename' created/updated successfully!";
    } else {
        echo "Error creating HTML file.";
    }
} else {
    echo "No HTML content received!";
        $html = " <!DOCTYPE html> <html> <head> <title>My Generated Page</title> </head> <body> <h1>Hello from PHP!</h1> <p>This HTML file was created automatically.</p> </body> </html> ";
         if (file_put_contents($filename, $html) !== false) {
        echo "HTML file '$filename' created/updated successfully!";
    }
}
?>

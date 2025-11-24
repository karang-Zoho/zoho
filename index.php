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
}
?>

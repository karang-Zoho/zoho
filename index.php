<?php
$filename = "page.html";

// Decode the HTML content sent from Deluge
$html = isset($_POST['html_content']) ? urldecode($_POST['html_content']) : "";

if (!empty($html)) {
    file_put_contents($filename, $html);
    echo "HTML file created successfully!";
} else {
    echo "No HTML content received!";
}
?>

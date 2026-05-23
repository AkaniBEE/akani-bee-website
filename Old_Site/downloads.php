<?php
// Directory where you keep your downloadable files
$filePath = 'downloads/beeinformation/';

// Check if the 'file' query parameter is set
if(isset($_GET['file']) && !empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $fullPath = $filePath . $filename;

    // Check if file exists
    if(file_exists($fullPath)) {
        // Set headers to download the file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($fullPath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fullPath));
        flush(); // Flush system output buffer
        readfile($fullPath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>

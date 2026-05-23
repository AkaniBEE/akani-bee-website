<?php
// Base path to the download folders
$basePath = 'downloads/';

// Get the folder and filename from the query parameters
$folder = isset($_GET['folder']) ? $_GET['folder'] : '';
$filename = isset($_GET['file']) ? $_GET['file'] : '';

// Sanitize the folder name to prevent directory traversal attacks
$allowedFolders = ['affidavits', 'beeinformation', 'otherFolder']; // Define allowed folders
if (!in_array($folder, $allowedFolders)) {
    die('Access to the specified folder is not allowed.');
}

// Build the full path to the file
$filePath = $basePath . $folder . '/' . $filename;

// Check if the file exists
if(file_exists($filePath)) {
    // Set headers to facilitate the file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filePath));
    // Clear output buffer
    ob_clean();
    flush();
    // Read the file and output its contents
    readfile($filePath);
    exit;
} else {
    echo 'File not found.';
}
?>

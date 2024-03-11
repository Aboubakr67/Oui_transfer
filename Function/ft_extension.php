<?php

// Function qui permet de vérifier si l'extension et l'application sont similaire
function getAndVerify($extension, $application)
{
    $extensions = array(
        ".doc" => "application/msword",
        ".docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        ".pdf" => "application/pdf",
        ".txt" => "text/plain",
        ".rtf" => "application/rtf",
        ".xls" => "application/vnd.ms-excel",
        ".xlsx" => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        ".csv" => "text/csv",
        ".ppt" => "application/vnd.ms-powerpoint",
        ".pptx" => "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        ".jpg" => "image/jpeg",
        ".jpeg" => "image/jpeg",
        ".png" => "image/png",
        ".gif" => "image/gif",
        ".bmp" => "image/bmp",
        ".tiff" => "image/tiff",
        ".mp4" => "video/mp4",
        ".mov" => "video/quicktime",
        ".avi" => "video/x-msvideo",
        ".wmv" => "video/x-ms-wmv",
        ".flv" => "video/x-flv",
        ".mkv" => "video/x-matroska",
        ".mp3" => "audio/mpeg",
        ".wav" => "audio/wav",
        ".flac" => "audio/flac",
        ".aac" => "audio/aac",
        ".zip" => "application/zip",
        ".rar" => "application/x-rar-compressed",
        ".7z" => "application/x-7z-compressed",
        ".psd" => "image/vnd.adobe.photoshop",
        ".ai" => "application/postscript",
        ".indd" => "application/vnd.adobe.indesign",
        ".html" => "text/html",
        ".css" => "text/css",
        ".js" => "application/javascript",
        ".php" => "application/x-httpd-php",
        ".py" => "text/x-python",
        ".java" => "text/x-java-source",
        ".cpp" => "text/x-c++src",
        ".c" => "text/x-csrc",
        ".rb" => "application/x-ruby",
        ".xml" => "application/xml",
        ".key" => "application/vnd.apple.keynote",
        ".sketch" => "application/x-sketch",
        ".xd" => "application/xd",
        ".fig" => "application/octet-stream",
        ".json" => "application/json",
        ".sql" => "application/sql",
        ".ini" => "text/plain",
        ".cfg" => "text/plain",
        ".conf" => "text/plain",
        ".odt" => "application/vnd.oasis.opendocument.text"
    );

    return isset($extensions[$extension]) && $extensions[$extension] === $application;
}
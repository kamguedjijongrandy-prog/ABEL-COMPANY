<?php
$id = $_GET['id'] ?? 0;

$file = "generated/brochure_$id.html";

if (!file_exists($file)) {
    die("Brochure not found");
}

echo file_get_contents($file);
?>
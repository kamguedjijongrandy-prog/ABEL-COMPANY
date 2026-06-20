<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$id = $_GET['id'];

$html = file_get_contents("generated/brochure_$id.html");

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("brochure_$id.pdf");
?>
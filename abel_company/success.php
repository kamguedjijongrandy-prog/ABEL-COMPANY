<?php
$id = $_GET['id'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body style="text-align:center; font-family:Arial;">

<h1> Brochure Created Successfully!</h1>

<a href="view.php?id=<?= $id ?>">View Brochure</a><br><br>
<a href="edit.php?id=<?= $id ?>">Edit Brochure</a><br><br>
<a href="download.php?id=<?= $id ?>">Download PDF</a>

</body>
</html>
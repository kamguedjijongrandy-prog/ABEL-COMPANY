<?php
$pdo = new PDO("mysql:host=localhost;dbname=abel company", "root", "");

$id = $_POST['id'];

$sql = "UPDATE submissions SET 
full_name=?, company_name=?, tagline=?
WHERE id=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['full_name'],
    $_POST['company_name'],
    $_POST['tagline'],
    $id
]);

header("Location: success.php?id=$id");
exit;
?>
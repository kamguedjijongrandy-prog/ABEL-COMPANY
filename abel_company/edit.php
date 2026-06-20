<?php
$pdo = new PDO("mysql:host=localhost;dbname=abel company", "root", "");
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM submissions WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input name="full_name" value="<?= $data['full_name'] ?>"><br>
    <input name="company_name" value="<?= $data['company_name'] ?>"><br>
    <input name="tagline" value="<?= $data['tagline'] ?>"><br>

    <button type="submit">Update</button>
</form>
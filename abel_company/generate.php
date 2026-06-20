<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: test.html');
    exit;
}

$fullName       = $_POST['full_name'] ?? '';
$companyName    = $_POST['company_name'] ?? '';
$tagline        = $_POST['tagline'] ?? '';
$email          = $_POST['email'] ?? '';
$phone          = $_POST['phone'] ?? '';
$model          = $_POST['model'] ?? 'model1';
$primaryColor   = $_POST['primary_color'] ?? '#3B82F6';
$secondaryColor = $_POST['secondary_color'] ?? '#1E3A5F';

$host = 'localhost';
$db   = 'flytify';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}

// upload logo
$logoPath = '';
if (isset($_FILES['logo']) && $_FILES['logo']['error'] === 0) {
    $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
    $name = 'logo_' . time() . '.' . $ext;

    if (!is_dir('uploads')) mkdir('uploads', 0777, true);

    move_uploaded_file($_FILES['logo']['tmp_name'], 'uploads/' . $name);
    $logoPath = 'uploads/' . $name;
}

// save to DB
$sql = "INSERT INTO submissions 
(full_name, company_name, tagline, email, phone, model, logo, primary_color, secondary_color)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $fullName,
    $companyName,
    $tagline,
    $email,
    $phone,
    $model,
    $logoPath,
    $primaryColor,
    $secondaryColor
]);

$id = $pdo->lastInsertId(); // IMPORTANT for edit system

// load template
$template = file_get_contents("models/$model.html");

$output = str_replace(
    [
        '{{FULL_NAME}}',
        '{{COMPANY_NAME}}',
        '{{TAGLINE}}',
        '{{EMAIL}}',
        '{{PHONE}}',
        '{{PRIMARY_COLOR}}',
        '{{SECONDARY_COLOR}}',
        '{{LOGO}}'
    ],
    [
        $fullName,
        $companyName,
        $tagline,
        $email,
        $phone,
        $primaryColor,
        $secondaryColor,
        $logoPath
    ],
    $template
);

// store rendered HTML for PDF
file_put_contents("generated/brochure_$id.html", $output);

// redirect to success page
header("Location: success.php?id=$id");
exit;
?>
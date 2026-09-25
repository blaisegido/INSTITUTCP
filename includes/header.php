<?php
if (!isset($page_title)) {
    $page_title = "Institut CP - Construire plus qu'un réseau. Créer de la valeur.";
}
if (!isset($page_description)) {
    $page_description = "Institut CP est l'institution de référence pour créer des opportunités réseau à haute valeur ajoutée, des formations et des services internationaux.";
}

$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$is_home = ($request_uri === '' || $request_uri === 'index' || $request_uri === 'index.php');
$body_class = (!$is_home) ? 'light-header' : '';

// Base URL dynamique — fonctionne en local et en production
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . '://' . $host;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/assets/img/Favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>/assets/img/Favicon.png">

    <!-- Open Graph / Meta Social -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/fonts.css?v=1.0.9">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/main.css?v=1.3.6">
</head>
<body class="<?php echo $body_class; ?>">

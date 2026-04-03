<?php
// $page_title and $page_desc should be set before including this
$site_name = "Rubasa Freight Services Ltd";
$default_desc = "Excellence in Distribution. Reliable, efficient, and technology-driven freight solutions across Uganda and beyond.";
$title = isset($page_title) ? $page_title . " | " . $site_name : $site_name;
$desc  = isset($page_desc) ? $page_desc : $default_desc;
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <meta name="keywords" content="freight services Uganda, logistics Uganda, cargo transport Uganda, warehousing Uganda, distribution Uganda, Rubasa freight, cross-border logistics East Africa">
  <meta name="author" content="Rubasa Freight Services Ltd">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= $site_name ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($desc) ?>">

  <title><?= htmlspecialchars($title) ?></title>

  <!-- Favicon -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🚛</text></svg>">

  <!-- Fonts + Styles -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Inline theme flicker prevention -->
  <script>
    (function(){
      const t = localStorage.getItem('rubasa-theme') || 'light';
      document.documentElement.setAttribute('data-theme', t);
    })();
  </script>
</head>
<body>

<?php
    require_once 'inc/bdd-pdo.inc.php';
    // If the table used for the app does not exist in mysql, it is created.
    // Otherwise, the one that already exists is used.
    dbCreate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="style/tailwind-out.css">
    <!-- Javascript -->
    <script src="script/main.js" type="module" defer></script>
</head>
<body class="bg-teal-500 font-sans">
    <div class="container mx-auto relative">
        <!-- Create a new to-do -->
        <?php require_once 'inc/html-create-to-do.inc.php' ?>
        <!-- Read existing to-dos -->
        <?php require_once 'inc/html-read-to-dos.inc.php' ?>
        <!-- Update a to-do -->
        <?php require_once 'inc/html-update-to-do.inc.php' ?>
        <!-- Delete a to-do -->
        <?php require_once 'inc/html-delete-to-do.inc.php' ?>
    </div>
</body>
</html>
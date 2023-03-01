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
        <h1>To-Do App</h1>
        <!-- Create a new to-do -->
        <!-- Read existing to-dos -->
        <!-- Update a to-do -->
        <!-- Delete a to-do -->
    </div>
</body>
</html>
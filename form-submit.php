<?php

    # SQL queries #
    require_once 'inc/bdd-pdo.inc.php';

    # Create a to-do #
    if (isset($_POST['submit']) && $_POST['submit'] === 'create') {
        createToDo();
    }

    # Redirection #
    header('location:.');
?>
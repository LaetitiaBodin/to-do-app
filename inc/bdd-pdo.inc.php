<?php

    # Environment variables #
    require_once 'env-env.inc.php';

    # Database and table creations #
    function dbCreate () {
        # Connection to the server #
        $pdo = new PDO(
            sprintf('mysql:host=%s',$_ENV['host'], $_ENV['dbname']),
            $_ENV['user'],
            $_ENV['password'],
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        );
        # Database creation (if it does not exist yet) #
        $db = $pdo->query(
            sprintf(
                'CREATE DATABASE
                IF NOT EXISTS `%s`',
                $_ENV['dbname']
            )
        );
        # Table creation (if it does not exist yet) #
        $table = $pdo->query(
            sprintf(
                'USE `%s`;
                CREATE TABLE
                IF NOT EXISTS `%s`(
                    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                    `title` VARCHAR (20) NOT NULL,
                    `text` VARCHAR (100) NOT NULL
                )
                ENGINE=InnoDB 
                DEFAULT CHARSET=latin1
                    COLLATE latin1_general_ci;',
                $_ENV['dbname'],
                $_ENV['tname']
            )
        );
        $pdo = null;
        return null;

    }

    # Database connection #
    function dbConnectionOn () {
        $pdo = new PDO(
            sprintf('mysql:host=%s;dbname=%s',$_ENV['host'], $_ENV['dbname']),
            $_ENV['user'],
            $_ENV['password'],
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        );
        return $pdo;
    }

    # Database disconnection #
    function dbConnectionOff () {
        return null;
    }

    # CRUD: Create #
    function createToDo () {
        $pdo = dbConnectionOn();
        $todo = $pdo->prepare(
            sprintf(
                'INSERT INTO `%s`
                    (`title`, `text`)
                VALUES
                    (:title, :text)',
                $_ENV['tname']
            )
        )->execute([
            ':title' => htmlspecialchars($_POST['title']),
            ':text' => htmlspecialchars($_POST['text'])
        ]);
        $pdo = dbConnectionOff();
        return null;
    }
    
    # CRUD: Read #
    function readToDos () {
        $pdo = dbConnectionOn();
        $todos = $pdo->query(
            sprintf(
                'SELECT * FROM `%s`',
                $_ENV['tname']
            )
        )->fetchAll(PDO::FETCH_ASSOC);
        $pdo = dbConnectionOff();
        return $todos;
    }
?>
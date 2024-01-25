<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=zoo', 'root', '');
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}
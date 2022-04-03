<?php

function connectDatabase() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=rentup;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());
    }
}
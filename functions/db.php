<?php
function connect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=accessory_skate;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $db;
}

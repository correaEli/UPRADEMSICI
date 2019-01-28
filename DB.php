<?php
$dbHostname = 'localhost';
$dbDatabase = 'id3608597_assessmentdb';
$dbUsername = 'id3608597_elicorrea';
$dbPassword = '1234567890';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    return $stmt->fetchAll();
}
?> 
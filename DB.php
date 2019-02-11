<?php
$dbHostname = 'localhost';
$dbDatabase = 'WebAssessment';
$dbUsername = 'root';
$dbPassword = '';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    return $stmt->fetchAll();
}
?> 
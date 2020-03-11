<?php
// --- PROBLEMATIQUE
$key = $_POST['key'] ?? "";

$select = "SELECT * FROM utilisateurs";

if (!empty($key) 
    $select .= " WHERE id = " . $key;


$exportToCsv="";
while ($utilsateur = $resultat->fetchArray())
    $exportToCsv .= $utilisateur["identifiant"] . "\r\n";
$conn->close();

file_put_contents("export.csv", $exportToCsv);

<?php

$file = "backupdata.txt";
$result = file_get_contents($file);

$rowdel = $_GET['row'];

$baris = explode("[R]", $result);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
    if($i == $rowdel) continue;
    $databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:read.php');
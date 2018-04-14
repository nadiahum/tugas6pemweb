<?php

$file = "backupdata.txt";

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Number = $_POST ['Number'];
$Address = $_POST ['Address'];

$edit = $Name  . "|F|" . 
        $Age . "|F|" .
        $Email . "|F|" . 
        $Number . "|F|" .
        $Address . "[R]";

$result = file_get_contents($file);

$rowedit = $_POST['row'];

$baris = explode("[R]", $result);
$databaru = "";
for($i = 0; $i < count($baris)-1; $i++) {
    if($i == $rowedit) {
    	$databaru .= $edit;
    	continue;
    }
    $databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:read.php');
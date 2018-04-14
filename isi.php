<?php

$file = "backupdata.txt";

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Number = $_POST ['Number'];
$Address = $_POST ['Address'];

$data = $Name  . "|F|" . 
        $Age . "|F|" .
        $Email . "|F|" . 
        $Number . "|F|".
        $Address . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data successfully submitted!";
<?php

$file = "backupdata.txt";
$result = file_get_contents($file);

$baris = explode("[R]", $result);

echo "<table border=7 width=50 height=60 cellpadding=5 cellspacing=5>";
echo "<tr>";
echo "  <th>NAME</th>";
echo "  <th>AGE</th>";
echo "  <th>EMAIL</th>";
echo "	<th>NUMBER</th>";
echo "  <th>ADDRESS</th>";
echo "	<th>DELETE</th>";
echo "	<th>EDIT</th>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i]);

    echo "<tr>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo "	<td>" . $col[3] . "</td>";
    echo "  <td>" . $col[4] . "</td>";
    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> </td>';
    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>';
    echo "</tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
    <head>
    <style>
    
    body {color: #191970;

            background-color: #FFC0CB;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        tr {border: 6px }
        tr:nth-child(even) {background: #FDF5E6}
        tr:nth-child(odd) {background: #FDF5E6}
</head>

</style>
</html>

<?php
$file = "backupdata.txt";
$result = file_get_contents($file);

$rowedit = $_GET['row'];
$baris = explode("[R]", $result);
$cols = explode("|F|", $baris[$rowedit]);

?>
<!DOCTYPE html>
<html>
    <body>
<form action="save.php" method="POST">
                <label for="name">NAME</label>
                <input type="text" id="Name" name="Name" value="<?php echo $cols[0] ?>">
                <br>
                <label for="name">AGE</label> 
                <input type="number" id="Age" name="Age" value="<?php echo $cols[1] ?>">
                <br>
                <label for="name">EMAIL</label> 
                <input type="text" id="Email" name="Email" value="<?php echo $cols[2] ?>">
                <br>
                <label for="name">NUMBER</label>
                <input type="tel" id="Number" name="Number" value="<?php echo $cols[3] ?>">
                <br>
                <label for="name">ADDRESS</label> 
                <input type="text" id="Address" name="Address" value="<?php echo $cols[4] ?>">
                <input type="hidden" name="row" value="<?php echo $rowedit ?>">
                <br>
				<input type="submit" value="Submit!">
        </form>
    </body>
</html>
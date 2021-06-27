<?php

$F = $_POST['F'];  
$B = $_POST['B']; 
$L = $_POST['L']; 
$R = $_POST['R']; 
$S = $_POST['S']; 

$db = mysql_connect("localhost","movecontrol","");
if (!$db) {
die("Database connection failed miserably: " . mysql_error());
}
$db_select = mysql_select_db("movecontrol",$db);
if (!$db_select) {
die("Database selection also failed miserably: " . mysql_error());
}
$result = mysql_query("SELECT * FROM moving", $db);
if (!$result) {
die("Database query failed: " . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    echo $row[1]." ".$row[2]."<br />";
    }
    mysql_close($db);    

$query = mysql_query("insert into moving (F, B, L, R, S) values('$F', 'B','$L', '$R', '$S')");


?>

<?php
$h1="localhost";
$u='root';
$p='';
$db='applicationform';
$conn = mysqli_connect($h1, $u, $p, $db);
if($conn==false )
{
    die('Could not connect:'.mysqli_connect_error());    
}
?>

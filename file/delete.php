<?php 
if(isset($_GET['id']))
{
$id=$_GET['id'];
include('dbconnection.php');
$query="DELETE FROM product WHERE id=$id";
$result=mysqli_query($conn,$query);
if($result)
    {
    return true;
    }
else
    {
        return false;
    }
}
else
{
echo "value not come";
}
?>

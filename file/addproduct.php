<?php
include('dbconnection.php');
$pnm=$_POST['pnm'];
$pcolor=$_POST['pcolor'];
$fresh=$_POST['fresh'];
$price=$_POST['price'];
$file=$_FILES["file"]["name"];
$v="INSERT INTO product(pname,pfreshness,pcolor,pprice,pimage) 
VALUES('$pnm','$fresh','$pcolor','$price','$file')";
 if(mysqli_query($conn,$v))
 {
      //echo 'All Your Details Are Saved!.<br>';
      header("location:productview.php");
 }
 else
 {
      echo "error".$v."sql error". mysqli_error($conn);
 }
 if(isset($_POST['submit']))
 {
    $allow=array("jpg"=>"image/jpeg");
    $name=$_FILES["file"]["name"];
    $type=$_FILES["file"]["type"];
    $ext=pathinfo($name,PATHINFO_EXTENSION);
    if(!array_key_exists($ext,$allow)) die("please select valid file format");
    if(in_array($type,$allow))
    {
        if(file_exists("upload/".$_FILES["file"]["name"]))
        {
            header('location:productview.php');
           
        }
        else
        {  
            $destination="upload/".$_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"],$destination);
            header('location:productview.php');
           // echo "location.reload(true)";
        }
    }
    else
    {
        echo "<script> alert('file not uploaded');</script>";
    }
}
mysqli_close($conn);
echo "<script>location.reload();</script>";
?>
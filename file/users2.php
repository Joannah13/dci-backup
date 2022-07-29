<?php
echo '<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap");
   *{
     margin:0;
     padding:0;
     box-sizing:border-box;
     font-family: "Mochiy Pop P One", sans-serif;
    }

    body
    {
     height:100vh;
     width:100%;
     display:flex;
     justify-content:center;
     align-items:center;
     background:linear-gradient(to right,#f1f6ba,#722690)
    }
    </style>
</head>
</body>
</html>';
$h1="localhost";
$u='root';
$p='';
$db='applicationform';
$conn = mysqli_connect($h1, $u, $p, $db);

$nm=$_POST['nm'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$add=$_POST['add'];
$sub=$_POST['sub'];
$course=$_POST['course'];
$email=$_POST['email'];
$mno=$_POST['mno'];
$psw=$_POST['psw'];
$file=$_FILES["file"]["name"];

$v="INSERT INTO users(name,dob,gender,address,subject,course,email,mobile_no,password,upload) 
VALUES('$nm','$dob','$gender','$add','$sub','$course','$email','$mno','$psw','$file')";
     if(mysqli_query($conn,$v))
     {
          echo 'All Your Details Are Saved!.<br>';
     }
     else
     {
          echo "error".$v."sql error". mysqli_error($conn);
     }

     if(isset($_POST['submit']))
     {
        $allow=array("pdf"=>"application/pdf","docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document","jpg"=>"image/jpeg");
        $name=$_FILES["file"]["name"];
        $type=$_FILES["file"]["type"];
        $ext=pathinfo($name,PATHINFO_EXTENSION);
        if(!array_key_exists($ext,$allow)) die("please select valid file format");
        if(in_array($type,$allow))
        {
            if(file_exists("upload/".$_FILES["file"]["name"]))
            {
                echo "This file is already exists";
            }
            else
            {  
                $destination="upload/".$_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],$destination);
                echo "uploaded successfully";
            }
        }
        else
        {
            echo "file not uploaded";
        }
    }
    mysqli_close($conn);
?>
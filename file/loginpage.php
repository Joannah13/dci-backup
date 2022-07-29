<?php
session_start();
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
     background:linear-gradient(to right,#f1f6ba,#722690);
    }

    form
    {
    height:28rem;
    width:25rem;  
    display:flex;
    flex-direction: column;
    background:rgba(255, 255, 255, 0.06);
    box-shadow :0 8px 32px 0 rgba(255, 255, 255, 0.37);
    border-radius: 30px;
    border-left:1px solid rgba(255,255,255,0.03);
    border-top:1px solid rgba(255,255,255,0.03);
    }

    form:before
    {
    content:"";
    position:absolute;
    bottom:3%;
    right:28%;
    width:200px;
    height:200px;
    background:white;
    border-radius:50%;
    z-index: -1;
    opacity:0.10; 
    }

    form:after
    {
    content:"";
    position:absolute;
    top:3%;
    left:28%;
    width:100px;
    height:100px;
    background:white;
    border-radius:50%;
    z-index: -1;
    opacity:0.10; 
    }

    h1
    {
    font-size :25px;
    text-align: center;
    margin-bottom:5%;
    }

    label
    {
    font-size :15px;
    text-shadow: #722690;
    margin-left:10%;
    position:static;
    }

    input
    {
    width:75%;
    border:none;
    outline:none;
    margin: 8% auto;
    margin-bottom:8%;
    margin-left:10%;
    background:transparent;
    border-bottom:1px solid  rgba(255,255,255,0.6);
    }

    input[type=checkbox]
    {
    margin-left:2%;
    margin-top:2%;  
    margin-bottom:2px;
    }

    #form #sp
    {
    font-size :10px;  
    text-align: center;
    margin-top:-5%;  
    margin-left:10%;
    }

    input[type=submit]
    {
    width: 50%;
    margin:50% auto;
    padding:10px 30px;
    background:rgba(255,255,255,0.06);
    box-shadow:3px 3px 5px rgba(255,255,255,0.37);
    outline:none;
    border: none;
    margin-top:10%;
    }

    span
    {
    color:#ff0000;
    font-family:"Times New Roman", Times, serif;
    font-size:15px;
    text-align: center;
    margin-top: -10%;
    }

    .create-account 
    {
	font-size: 10px;
	margin-bottom: 7px;
    margin-top: 7px;
    text-align:center;
    }

    .create-account a 
    {
	text-decoration: none;
	font-size: 10px;
	font-weight: bold;
    }

</style>

<script>
function f1()
{
var ch=document.getElementById("ch");
if(ch.checked)
{
var pw=document.getElementById("pw");
pw.setAttribute("type","text");
}
else
{
var pw=document.getElementById("pw");
pw.setAttribute("type","password");
}
}

function validation()
{
    var useremail=document.getElementById("email").value;
    var text=document.getElementById("text1");
    if(useremail=="")
    {
        text.innerHTML="* please enter username";
    }  
    else
    {
        text.innerHTML="";
    }

    var password=document.getElementById("pw").value;
    var text=document.getElementById("text2");
    if(password=="")
    {
        text.innerHTML="* please enter password";
    } 
    else
    {
        text.innerHTML="";
    }
    
    if(useremail!="" && password!="")
    {
        var form=document.getElementById("form");
        form.onsubmit="return true";
    }
}
 
</script>
</head>

<body>
    <form id="form" class="form1" onsubmit="validation();return false;" method="POST" > 
        <h1>LOGIN-PAGE</h1>
        <label>Email :</label>
             <input type="text" id="email" name="email" placeholder="Enter email" onkeyup="validation()"><br>
             <span id="text1"></span>
        
        <label>Password :</label>
            <input type="password" id="pw" placeholder="Enter password" name="psw" onkeyup="validation()"><br>
            <span id="text2"></span>  
            
        <input type="checkbox" id="ch"  onclick="f1()">
        <label  id="sp" >show password</label> 
        <div class="create-account">
        Don`t Have an Account ?<a href="http://localhost//file//user1details.html">Sign up</a>
        </div>
        <input type="submit" id="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>';
include('dbconnection.php');
if(isset($_POST['email']))
{
$email=$_POST['email'];
$pw=$_POST['psw'];
$sql="select * from users where email='".$email."' AND password='".$pw."' limit 1";
//$sql='select password from users where email='.'"'.$email.'"';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1 && is_array($row))
{  
    $_SESSION["email"]=$row["email"];
    $_SESSION["uname"]=$row["name"];
    echo "<script> location.href='successful.php'</script>";
    //include('successful.php'); ---echo "<script>window.location.href('successful.php');</script>";--//header("location:successful.php");
    //exec('http://localhost//file//successful.php');
}
else
{
	 echo"<script>alert('login unsucessful :( Sign up if you are a new user!!');</script>";
     exit();
}
}
?>
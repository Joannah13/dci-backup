<html>
<head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap");
    *{
        font-family: "Mochiy Pop P One",sans-serif;
        font-size:15%;
     }
     img
        {
        width:100;
        height:100;
        border-radius:50%;
        margin-left:50px;
        }
     body
     {
      background:#f1f6ba;
      margin:0;
      padding:0;
      min-height:100vh;
     }
     span
      {
        color:#f1f6ba;
        font-size:10;
        margin-left:5px;
        text-align:center;
      }
     /*.form1
     {
        visibility: hidden; 
     }
     span[id='mail']
     {
        color:black;
        position: fixed;
        font-family: "Mochiy Pop P One",sans-serif;
        font-size:50%;
        margin-left:20%;
        margin-top:-15%;
     }
     a {
     text-decoration: none;
	  font-size: 10px;
	  font-weight: bold;
     color:red;
     border:5px solid black;
     }
    span[id='name']
     {
        color:black;
        position: fixed;
        font-family: "Mochiy Pop P One",sans-serif;
        font-size:60%;
        margin-left:25%;
        margin-top:-18%;
     }*/
      /*.title
      {
         text-align:center;
         background-color:green;
         border-bottom:2px solid black;
         height:100px;
      }*/
      iframe
      {
         margin:0;
         border:0;
      }
      .navbar
      {
         width:250px;
         position:relative;
         border:2px solid black;
         background:#722690;
      }
      .navbar a
      {
         display:block;
         text-align:center;
         text-decoration:none;
         color:black;
         /*border:1px solid black;*/
         margin-top:1px;
         font-size:15px;
         font-weight:bold;
         height:40px;
         background:linear-gradient(to right,#f1f6ba,#722690)
      }
      .container
      {
         display:flex;
      }
      .right-side{
         width:100%;
         height:100vh;
      }
</style>
</head>
<body>
   <div class="container">
   <div class="navbar">  
   <h1 style="font-size:25px; color:#f1f6ba; text-align:center;">Product Management</h1>
   <?php include('loginprofile.php');?>
        <a href="" target="">PRODUCT-1</a>
        <a href="" target="">PRODUCT-2</a>
        <a href="" target="">PRODUCT-3</a>
        <a href="" target="">PRODUCT-4</a>
   </div>
   <div class="right-side">
        <iframe src="sidebar.php" name="frm" width="100%" height="100%"></iframe> 
   </div>
   </div>
</body>
</html>
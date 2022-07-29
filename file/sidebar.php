<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
  @import url("https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap");
        *{   
           font-family: "Mochiy Pop P One", sans-serif;
           font-size:12px;
         }
.form-box 
{
  padding: 10px;
  background: #f4f7d5;
  border: 10px solid #f2f2f2;
}
label
{
  font-size:14px;
  font:italic;
}

    body
    {
        background:#f1f6ba;
        margin:0;
        padding:0;
    }

    .btn
    {
        color: rgb(0, 0, 0);
        padding: 10px 15px;
        background:white;
        box-shadow :3 8px 32px 0 rgba(255, 255, 255, 0.37);
    }

    nav
    {
     background-color:#722690;
    }
    .offcanvas
    {
      background-color:#f1f6ba;
    }
</style>

</head>
<body>
<nav class="navbar fixed-top "> 
<div class="container-fluid justify-content-end">
  <form class="form-inline justify-content-center">
  <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#AddProduct" aria-controls="AddProduct">ADD PRODUCT</button>
  </form>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="AddProduct" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasNavbarLabel">  NEW-PRODUCT</h5><br>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- Input Form -->
         <?php include('product.html');?>
    </div>
  </div>
</nav> 

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- CRUD Table --><?php include('productview.php');?>
</html>
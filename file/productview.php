<script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">

<?php
include('dbconnection.php');
echo "<html>
<head>
<style>
.table
{
    width:800px;
    margin-top:100px;
    margin-left:50px;
}
img
{
    width:150;
    height:150;
    /*border-radius:50%;*/
    margin-left:10px;
    margin-top:10px;
}

label
{
  color:red;
  margin-left:10px;
  margin-top:10px;
}
</style>
</head>

<body>
<form action=''>
<table class='table table-hover table-striped'>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>FRESHNESS</th>
    <th>COLOR</th>
    <th>PRICE</th>
    <th>ACTION</th>
</tr>";
$sql = "SELECT * FROM product ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) 
{
  $id = $row[0];
    echo "<tr><td>" . $row[0] . "</td>" .
        "<td>" . $row[1] . "</td>" .
        "<td>" . $row[2] . "</td>" .
        "<td>" . $row[3] . "</td>" .
        "<td>" . $row[4] ."</td>".
        "<td>
        <a href='?id=$id' class='btn btn-primary' method='post' name='view' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>VIEW</a>     
        <a href='?id=$id' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#static'>EDIT</a>
             <a href='#' onclick='myfunc($id)' id='b4' class='btn btn-danger'>DELETE</a>
        </tr>";
}
echo '</table>';

echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">DETAILED-VIEW</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">';

//$id=$_POST['id'];
$sql = "SELECT * FROM product WHERE id='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){ 
//$row = mysqli_fetch_array($result);
echo $id;
$file="http://localhost/file/upload/".$row[5];
echo   "<label>Product-id:</label>".$row[0]."<br>";
echo   "<label>Product-name:</label>".$row[1]."<br>";
echo   "<label>Product-freshness:</label>".$row[2]."<br>";
echo   "<label>Product-color:</label>".$row[3]."<br>";
echo   "<label>Product-price:</label>".$row[4]."<br>";
echo   "<img src=".$file.">"."<br>"."<br>";
}

echo '
</div>
<div class="modal-footer">
<button type="button" onclick="f1()" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
</div>
</div>
</div>
</div>
</form>';


echo '
<div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="http://localhost/file/edit.php"  enctype="multipart/form-data" method="post">
        <div class="form-group">
         
          <label for="name">PRODUCT-NAME :</label>
          <input type="text" class="form-control" name="pnm" id="pnm"  placeholder="Enter product name"> <br>
        </div>
    
        <div class="form-group">
          <label for="color">PRODUCT-COLOR :</label>
                <select class="form-control" id="pcolor" name="pcolor" >
                    <option value="">choose color</option>
                    <option value="black">black</option>
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                </select><br>
        </div>
    
        <div class="form-group">
        <label for="fresh" >PRODUCT-FRESHNESS :</label><br>
                <input type = "radio" id="fresh" name = "fresh" value = "Brand-New" style="margin-left:50px;"> BRAND-NEW <br>
                <input type = "radio" id="fresh" name = "fresh" value = "Second-Hand" style="margin-left:50px;"> SECOND-HAND <br>
                <input type = "radio" id="fresh" name = "fresh" value = "Refurnished" style="margin-left:50px;"> REFURNISHED<br><br>
        </div>
    
        <div class="form-group">
        <label for="price">PRODUCT-PRICE :</label><br>
            <input type="checkbox" id="t1" name = "price" value = "1" style="margin-left:50px;"> Rs. 9999 and Below <br>
            <input type="checkbox" id="t2" name = "price" value = "2" style="margin-left:50px;"> Rs. 10000 - Rs. 24999 <br>
            <input type= "checkbox" id="t3" name = "price" value = "3" style="margin-left:50px;"> Rs. 25000 and Above <br><br>
        </div>
        
        <div class="form-group">
        <label for="image">IMAGE OF THE PRODUCT:</label><br>
        <input type="file" value="file" name="file" id="file"><br><br>
        </div> 
       
        </form>  
    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>';


echo "</body>
</html>";
?>

<script type="text/javascript">
function myfunc(jepp){     
        swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm:true,
                    closeOnCancel: true
                },
                function(isConfirm) 
                {
                    if (isConfirm) 
                    {
                        $.ajax({
                        type: "GET",
                        url: 'delete.php',
                        data: {id:jepp},
                        success: function(response)
                    {
                swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                location.reload(true);
              }            
            });
        } 
          else 
          {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
          });
    }    

   function f1()
    {
     location.reload(true);
      //header('location:productview.php');
    }
    
</script>

<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
         background-image: url(bg2.jpg);
        }
        table {
            background-color: white;
        }
    </style>
    <title>Price chart</title>
  </head>
  <body>

  <div class="container mt-3">
  <h2>Here you can see the prices of the various fruits available.</h2>
  <p>Choose anything available we are happy to serve you.</p> 
  <p><b>No discounts.</b>only given in <b>season time</b></p>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Fruit Name</th>
        <th>Cost in kgs.</th>
      </tr>
    </thead>
    <tbody>


    <?php


$sql="select *from price";
$done=mysqli_query($conn,$sql);
if($done){
  while($row=mysqli_fetch_assoc($done)){
  $fruit=$row['fruit'];
$cost=$row['cost'];
echo ' <tr>
<th scope="row">'.$fruit.'</th>
<td>'.$cost.'</td>
</tr>';
  }
}
    ?>
  </table>
<a class="btn btn-primary" href="welcome.php" role="button">  Go to homepage</a>
</div>
     
  </body>
</html>
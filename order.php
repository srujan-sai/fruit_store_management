<?php
include 'conn.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $fruit = $_POST['fruit'];
  $kgs = $_POST['kgs'];
  $address = $_POST['address'];

  $sql= "INSERT INTO orders (name, mobile, fruit, kgs, address) values ('$name', '$mobile', '$fruit', '$kgs', '$address')";
  $result = mysqli_query($conn,$sql);
   if($result){
    ?>
<div class="alert alert-success">
  <strong>Success!</strong> data entered successfully !!!
</div>
<?php
   }else{
     die(mysqli_error($conn));
   }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-image: url(bg2.jpg);
        max-height: auto;
      }
    </style>
    <title>order</title>
  </head>
  <body>
    <div class="container my-5">
      <form action="" method="POST" class="orders">
        <div class="col-md-6">
          <label>Name</label>
          <input
            type="name"
            class="form-control"
            placeholder="enter your name"
            name="name"
          />
        </div>
        <br />
        <div class="col-md-6">
          <label>mobile</label>
          <input
            type="mobile"
            class="form-control"
            placeholder="enter your mobile number"
            name="mobile"
          />
        </div>
        <br />
        <div class="col-md-6">
          <label>fruit</label>
          <input
            type="fruit"
            class="form-control"
            placeholder="enter the fruit you want"
            name="fruit"
          />
        </div>
        <br />
        <div class="col-md-6">
          <label>kgs</label>
          <input
            type="kgs"
            class="form-control"
            placeholder="enter no kgs you want"
            name="kgs"
          />
        </div>
        <br />
        <div class="col-md-6">
          <label>address</label>
          <input
            type="address"
            class="form-control"
            placeholder="enter where you want to deliver"
            name="address"
          />
        </div>
        <br />
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit">
            submit
          </button>
        </div>
      </form>
      <br />
      <a class="btn btn-primary" href="welcome.php" role="button"
        >Go to homepage</a
      >
    </div>
  </body>
</html>

<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
        body {
         background-image: url(bg2.jpg);
          margin: 0;
          padding: 0;
          
        }
        div{
            background-color: white;
        }
        img{
            max-width: 100;
        }
        </style>
</head>
<body >
    <?php echo "<h1 style='text'; align='center'; text-color='yellow'> Hello, " . $_SESSION['username'] . "</h1>"; ?>
  
    <h2 style='text'; align='center'; color='yellow'>  welcome to our fruit store </h2>
    <div class="container mt-5">
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#home"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="chart.php">Price chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="co.php">Comments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <br>
     <h2>
       <b>About us</b>
     </h2>
     <p>Here we are selling fresh organic fruits directly farmers.
       we have direct contacts with them. so we can provide you with the pure organic fruits
     </p>

      <h2  >For <i>collaboration</i></h2>
      <p> if you want to sell with us please fill the application form</p>
      <p><b>click here</b><a class="btn btn-primary" href="apply.php" role="button"
        >Apply</a></p>
      <h3><b>Note</b></h3>
      <p>If you buying here then you are helping and supporting the farmers</p>
</body>
</html>
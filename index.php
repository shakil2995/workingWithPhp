<?php 
$conn = mysqli_connect('localhost','root','','contacts','3308');
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL'.mysqli_connect_errno();
} else{
    // echo 'DB connected';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Contact us</title>
</head>
<body>
<nav class="navbar navbar-expand-md  mb-4">
      <a class="navbar-brand" href="index.php">Shayla</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>

        </ul>
    </nav>

<?php 
   if ( isset( $_GET['name']) && isset($_GET['email']) && isset($_GET['message'] ) ) {
    //    echo ("not here");
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "INSERT INTO contacts(name,email,message) VALUES ('$name','$email','$message')";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
   }
      ?>
<div class="main-contaner">
    <h1> Contact Us </h1>
<form action="index.php " method="get">
        <div>
            <label style="width:80px;">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div> <br>
        <div>
            <label style="width:80px;">Email </label>
            <input type="text" name="email" placeholder="Enter Email">
        </div>
        <br>
        <div>
            <label style="width:80px;">Message </label>
            <input type="text" name="message" style="height:200px;width:800px;" placeholder="Write your message here">
        </div>
        <br>
        <button class="btn btn-primary btn-lg" type="submit">GO</button>
    </form>
      </div>
    <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
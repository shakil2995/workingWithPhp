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
        $message = "New record created successfully";
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        // echo "New record created successfully";
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
            <input type="text" style="width:80%;" name="name" placeholder="Enter Name">
        </div> <br>
        <div>
            <label style="width:80px;">Email </label>
            <input type="text" style="width:80%;" name="email" placeholder="Enter Email">
        </div>
        <br>
        <div>
            <label style="width:80px;">Message </label>
            <input type="text" name="message" style="height:200px;width:80%;" placeholder="Write your message here">
        </div>
        <br>
        <button class="btn btn-primary btn-lg border border-radius" type="submit">GO</button>
    </form>
      </div>
      <br>
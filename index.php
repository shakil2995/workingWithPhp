<?php 
include("connection.php");
// include("query.php");
include("header.php");
// include("body.php");
// include("footer.php");
?>
<!--  form -->
<?php 
    //  if(isset($_GET['name'])){
    //     //   echo htmlentities($_GET['name']);
    //  }
    // if(isset($_POST['submit'])){
    //     $name = mysqli_real_escape_string($conn,$_POST['name']);
    //     echo htmlentities($_GET['name']);
    //     $email = mysqli_real_escape_string($conn,$_POST['email']);
    //     $message = mysqli_real_escape_string($conn,$_POST['message']);
    //     $query = "INSERT INTO contacts(name,email,message) VALUES ('$name','$email','$message')";
    //     if(mysqli_query($conn,$query)){
    //         header('Location:index.php');
    //     } else{
    //         echo 'ERROR:'.mysqli_error($conn);
    //     }
    // }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "INSERT INTO contacts(name,email,message) VALUES ('Shakil5','5@gmail.com','AHhahhaah')";
      
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      ?>



?>










    <form action="index.php " method="get">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div> <br>
        <div>
            <label for="">Email </label>
            <input type="text" name="email" placeholder="Enter Email">
        </div>
        <br>
        <div>
            <label for="">Message </label>
            <input type="text" name="message" placeholder="Write your message here">
        </div>
        <button class="btn btn-primary btn-lg" type="submit">GO</button>
    </form>
<!-- form end -->
    <h1>Contacts</h1>
    <!--  print data -->
    

    <br>
<footer class="footer">
         &copy; shakil ahmed - 2022
    </footer>
</body>

</html>
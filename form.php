<!-- <?php 
    //  if(isset($_GET['name'])){
    //       echo htmlentities($_GET['name']);
    //  }
    // if(isset($_POST['submit'])){
    //     $name = mysqli_real_escape_string($conn,$_POST['name']);
    //     $email = mysqli_real_escape_string($conn,$_POST['email']);
    //     $message = mysqli_real_escape_string($conn,$_POST['message']);
    //     $query = "INSERT INTO contacts(name,email,message) VALUES ('$name','$email','$message')";
    //     if(mysqli_query($conn,$query)){
    //         header('Location:index.php');
    //     } else{
    //         echo 'ERROR:'.mysqli_error($conn);
    //     }
    // }
?>
    <form action="index.php " method="post">
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
    </form> -->

    <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 
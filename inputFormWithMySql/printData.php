<?php 
$conn = mysqli_connect('localhost','root','','contacts','3308');
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL'.mysqli_connect_errno();
} else{
    // echo 'DB connected';
}
$query = "SELECT * FROM `contacts`";
$result = mysqli_query($conn,$query);
$contacts_conn = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>
      <?php
      
      if(isset($_POST['delete'])) {
          echo "This is delete that is selected ";
      }
    //   echo $_POST['id'];
      $delete =  "DELETE FROM `contacts` WHERE `contacts`.`id` = 61";

  ?>
<?php foreach ($contacts_conn as $contact) : ?>
    <div class="container b-card" >
        <h4>Name : <?php echo $contact['name']; ?></h4>
        <p>Email : <?php echo $contact['email']; ?></p>
        <p>Message : <?php echo $contact['message']; ?></p>
        <!-- <p>Id : <?php echo $contact['id']; ?></p> -->
              <form method="post">
                <input type="hidden" name="id" value="10"/>
                <!-- <input  class="btn btn-sm btn-outline-danger align-right" type="submit" name="delete" -->
              <!-- value="Delete"/> -->
                </form>
            </div>

    

    <br>
    <?php endforeach; ?>
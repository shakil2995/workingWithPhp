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
<?php foreach ($contacts_conn as $contact) : ?>
    <div class="container b-card" >
        <h4>Name : <?php echo $contact['name']; ?></h4>
        <p>Email : <?php echo $contact['email']; ?></p>
        <p>Message : <?php echo $contact['message']; ?></p>
    </div>
    <br>
    <?php endforeach; ?>
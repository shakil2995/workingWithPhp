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
// var_dump($contacts_conn);
mysqli_free_result($result);
mysqli_close($conn);
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
      <a class="navbar-brand" href="index.php" autocomplete="off">Shayla</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" autocomplete="off">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php" autocomplete="off">Admin</a>
          </li>

        </ul>
    </nav>
<?php foreach ($contacts_conn as $contact) : ?>
    <div class="container border border-secondary" >
        <h4>Name : <?php echo $contact['name']; ?></h4>
        <p>Email : <?php echo $contact['email']; ?></p>
        <p>Message : <?php echo $contact['message']; ?></p>
    </div>
    <br>
    <?php endforeach; ?>
</body>

</html>

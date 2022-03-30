<?php include("connection.php");
$query = "SELECT * FROM `contacts`";
$result = mysqli_query($conn,$query);
$contacts_conn = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($contacts_conn);
mysqli_free_result($result);
mysqli_close($conn);
?>
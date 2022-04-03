<?php 
$conn = mysqli_connect('localhost','root','','contacts','3308');
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL'.mysqli_connect_errno();
} else{
    echo 'DB connected';
}
?>
<br>
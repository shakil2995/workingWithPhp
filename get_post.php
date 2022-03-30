<?php 
     if(isset($_GET['name'])){
          echo htmlentities($_GET['name']);
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get/Post</title>
</head>
<body>
    <form action="index.php " method="get">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div> <br>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <button type="submit">GO</button>
    </form>
</body>
</html>
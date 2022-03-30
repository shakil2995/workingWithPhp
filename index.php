<?php include("query.php"); ?>
<?php 
     if(isset($_GET['name'])){
          echo htmlentities($_GET['name']);
     }
?>
<?php include("header.php"); ?>
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

    <?php include("footer.php"); ?>
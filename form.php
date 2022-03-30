<?php 
     if(isset($_GET['name'])){
          echo htmlentities($_GET['name']);
     }
?>
    <form action="index.php " method="get">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div> <br>
        <div>
            <label for="">Email </label>
            <input type="text" name="email">
        </div>
        <button class="btn btn-primary btn-lg" type="submit">GO</button>
    </form>
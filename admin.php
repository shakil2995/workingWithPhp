<?php 
include("query.php");
include("header.php");
?>
<?php foreach ($contacts_conn as $contact) : ?>
    <div class="container border border-primary" >
        <h3><?php echo $contact['name']; ?></h3>
        <h3><?php echo $contact['email']; ?></h3>
        <h3><?php echo $contact['message']; ?></h3>
    </div> <br>
    <?php endforeach; ?>
<?php
// include("body.php");
include("footer.php");
?>


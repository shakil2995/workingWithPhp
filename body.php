<?php 
include("form.php");
?>
<h1>Contacts</h1>
<?php foreach ($contacts_conn as $contact) : ?>
    <div class="well jumbotron">
        <h3><?php echo $contact['name']; ?></h3>
        <h3><?php echo $contact['email']; ?></h3>
        <h3><?php echo $contact['message']; ?></h3>
    </div>
    <?php endforeach; ?>
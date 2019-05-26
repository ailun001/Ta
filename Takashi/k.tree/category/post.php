<?php include './../header.php'?>
<div class="content">
    
    <?php
	$to = "ailun001kkjoker@gmail.com";
	$subject = $_POST["order"];
	$message = $_POST["address"];
	$from = $_POST["name"];
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
    echo '<h1>Succefull to Buy</h1>';
    echo '<br>';
    echo '<br>';
    echo '<p>Thanks for you purchase</p>';
    echo '<br><br>';
    echo '<p>Contact:tree@mail.com</p>';
    
    ?>
    
</div>

<?php include './../footer.php'?>
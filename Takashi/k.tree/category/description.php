<?php include './../header.php'?>
<div class="content">
    
    <?php
	$q = $_POST["item"]." ".$_POST["Quantity"];
    if($_POST["choose"]=="pickup"){
    echo '<h1>Succefull to Buy</h1>';
    echo '<br>';
    echo '<br>';
    echo '<p>Thanks for you purchase</p>';
    echo '<br>';echo '<br>';
    echo '<p>Contact:tree@mail.com</p>';
	echo 'Address: ??, Auckland';
    }elseif ($_POST['choose']=="delivery" ) {
        echo '<h1>Please Enter You Detial</h1>';
		echo '<form method="post" action="post.php">';
		echo 'Name: <input type="text" name="name">';
		echo '<br><br>';
		echo 'Address: <textarea name="address" rows="4" cols="30"></textarea>';
		echo '<br><br>';
		echo '<select name="order">';
		echo '<option value="'.$q.'">'.$q.'</option>';
		echo '<input type="submit" name="submit" value="OK">';
		echo '</form>';
		echo '<br><br>';
		echo '<br><br>';
		
    }else {echo '<h1>Please go back and try again</h1>';}
    ?>
    
</div>
<?php include './../footer.php'?>


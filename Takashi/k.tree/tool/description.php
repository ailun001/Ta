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
	echo '		<h2>Mt Eden Branch:</h2>
            <h3>
                445 Mount Eden Road, Mount Eden, Auckland</br>
				Contact: Stephen Beck, 09 789 4455</br></br>
            </h3>
			<h2>East Tamaki Branch:</h2>
            <h3>
                29 Kerwyn Ave, East Tamaki, Auckland 2013<br>
				Contact: Amy Anderson, 09 789 4444</br></br>
            </h3>
			<h2>Albany Branch:</h2>
            <h3>
                67 Kell Dr, Albany, Auckland 0632</br>
				Contact: Chris  Wilson, 09 789 1458</br></br>
			</br></br>
            </h3>';
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


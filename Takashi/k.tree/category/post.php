<?php include './../header.php'?>
<div class="content">
    
    <?php
	$to = "ailun001kkjoker@gmail.com";
	$subject = "Order: ".$_POST["order"];
	$message = "Address; ".$_POST["address"];
	$from = $_POST["name"];
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
    echo '<h1>Succefull to Buy</h1>';
    echo '<br>';
    echo '<br>';
    echo '<p>Thanks for you purchase</p>';
    echo '<br><br>';
    echo '<h2>Mt Eden Branch:</h2>
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
    ?>
    
</div>

<?php include './../footer.php'?>
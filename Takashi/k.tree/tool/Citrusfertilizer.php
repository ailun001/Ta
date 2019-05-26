<?php include "./../header.php"?>

<h2 class="heading">Gardening tools</h2>
	<section class="container content-section">

            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Citrus Fertilizer</span>
                    <a href="#"><img class="shop-item-image" src="./../Images/citrus_fertilizer.png"></a>

                    <form action="description.php" method="post">

                        <p>Description: </br></br>

                          Ensures that your plants get the best possible growth for your garden.
                          </br>
                      </p>
                      <p> Blends premium nutrients together for the best care for your citrus trees</p>
                  	<p> -Replenishes Nutrients</p>
                  	<p> -Contains potassium</p>

                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$15</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>


<?php include './../category/cart.php'?>

<?php include "./../footer.php"?>

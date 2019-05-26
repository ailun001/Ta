<?php include "./../header.php"?>


    <h2 class="heading">Gardening tools</h2>

	<section class="container content-section">

            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Premium Snail Bait</span>
                    <a href="#"><img class="shop-item-image" src="./../Images/snail_bait.png"></a>

                    <form action="description.php" method="post">

                        <p>Description: </br></br>

                          Kills snails, slugs and other types of insects in the home garden.
                          </br>
                      </p>
                      <p> Contains a bittering agent to help prevent accidental consumption by children and pets.</p>
                  	<p> -Attracts pests.</p>
                  	<p> -Contains poison</p>
                  	<p> -Highly Effective</p>


                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$13</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>

<?php include './../category/cart.php'?>

<?php include "./../footer.php"?>

<?php include './../header.php'?>

    <h2 class="heading">Gardening tools</h2>

	<section class="container content-section">

            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Premium Potting Mix</span>
                    <a href="#"><img class="shop-item-image" src="./../Images/Potting_mix.png"></a>

                    <form action="description.php" method="post">

                        <p>Description: </br></br>

                          Blended with premium ingredients and fertilizers for indoor and outdoor ingredients.
        </br>
        <p> Blended with 100% renewable ingredients</p>
        <p> -Contains Coco Fibre to increase moisture retention</p>
        <p> -Promotes healthy root development</p>
        <p> -Contains enough nutrients for 1 year</p>


                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$10</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>

<?php include './../category/cart.php'?>

<?php include "./../footer.php"?>
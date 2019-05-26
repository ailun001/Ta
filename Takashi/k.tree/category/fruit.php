<?php include './../header.php'?>

<section class="container content-section">
            <h2 class="heading">Fruit Tree</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Initial Apple</span>
                    <a href="./fruit/apple.php"><img class="shop-item-image" src="./../Images/Initial_apple.png" alt="Fruit plants" width="300" height="300"></a>

                    <div class="shop-item-details">
                        <span class="shop-item-price">$50</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <span class="shop-item-title">Nevelina Orange</span>
                    <a href="./fruit/orange.php"><img class="shop-item-image" src="./../Images/Navelina_Orange.png" alt="Fruit plants" width="300" height="300"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$28</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Meyer Lemon</span>
                    <a href="./fruit/lemon.php"><img class="shop-item-image" src="./../Images/Meyer_Lemon.png" alt="Fruit plants" width="300" height="300"></a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$15</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>


<?php include 'cart.php'?>

<?php include './../footer.php'?>
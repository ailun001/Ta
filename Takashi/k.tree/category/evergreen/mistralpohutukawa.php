<?php include './../../header.php'?>

 	<section class="container content-section">

             <div class="shop-items">
                 <div class="shop-item">
                     <span class="shop-item-title">Mistral Pohutukawa</span>
                     <a href="#"><img class="shop-item-image" src="https://tree-testing.herokuapp.com/Images/Initial_apple.png"></a>

                     <form action="description.php" method="post">

                         <p>Description: </br></br>

                            A hybrid of the Pohutakawa and Rata. Upright growing tree.
        </br>
    </p>
    <p> Soil Drainage: Moist Free Draining</p>
    <p> Sun: Sunny </p>
    <p> Maintenance requirements: Low </p>
    <p> Max height of mature tree: 4m </p>
    <p> Growth rate: slow </p>

                         </form>

                     <div class="shop-item-details">
                         <p>Price: </p>
                         <span class="shop-item-price">$15</span>
                         <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                     </div>
                 </div>
             </div>
         </section>


 	<section class="container content-section">
             <h2 class="section-header">CART</h2>
             <div class="cart-row">
                 <span class="cart-item cart-header cart-column">ITEM</span>
                 <span class="cart-price cart-header cart-column">PRICE</span>
                 <span class="cart-quantity cart-header cart-column">QUANTITY</span>
             </div>
             <div class="cart-items">
             </div>
             <div class="cart-total">
                 <strong class="cart-total-title">Total</strong>
                 <span class="cart-total-price">$0</span>
             </div>
             <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
         </section>

     <footer class="main-footer">
         <div class="container main-footer-container">
            <h3 class="band-name">TreeCo</h3>
         </div>
     </footer>
 </body>
 </html>

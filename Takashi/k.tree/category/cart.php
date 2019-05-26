<?php echo '

			<div><button>Pay By MasteCard</button>  <button>PayPal</button></div><br><br>
<form action="description.php" method="post">
 <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span name="item" class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span name="Quantity" class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
			<br><br>
			<select name="choose">
				<option value="pickup">Pickup</option>
				<option value="delivery">Delivery</option>
			</select>
			<br><br>
            <button  type="post" value="Post">PURCHASE</button>
        </section>
</form>
';
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>PlantATree</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
    <script src="store.js" async></script>


</head>
<body>
    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="category.html">CATEGORY</a></li>
                <li><a href="about.html">ABOUT</a></li>
            </ul>
        </nav>
        <h1 class="band-name band-name-large">TreeCo</h1>
    </header>

    <h2 class="heading">DypsisBaronii</h2>





    <img src="Images/Dypsis_Baronii.png" alt="palm tree plants" width="300" height="300">
    </br>
    </br>

    <p>

        Description: <br />

        Used for smaller gardens and can be utilised as a smaller, dramatic palm in larger garden designs. <br />
        o Soil Drainage: Slow <br />
        o Sun: Sunny <br />
        • Maintenance requirements: Low <br />
        • Max height of mature tree: 5m <br />
        • Growth rate: Fast <br />

        <br />
        Price: $50
    </p>


    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3>TreeCo 2019 Stream11Group6</h3>

        </div>
    </footer>
</body>
</html> -->
<?php include './../../header.php'?>

 	<section class="container content-section">

             <div class="shop-items">
                 <div class="shop-item">
                     <span class="shop-item-title">Dypsis Baronii</span>
                     <a href="#"><img class="shop-item-image" src="https://tree-testing.herokuapp.com/Images/Initial_apple.png"></a>

                     <form action="description.php" method="post">

                        <p>Description: </br></br>

                            Used for smaller gardens and can be utilised as a smaller, dramatic palm in larger garden designs. <br /><br />
        Soil Drainage: Slow <br /><br />
        Sun: Sunny <br /><br />
        Maintenance requirements: Low <br /><br />
        Max height of mature tree: 5m <br /><br />
        Growth rate: Fast <br />

                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$25</span>
                    </div>
                </div>
            </div>
        </section>

<?php include './../../footer.php'?>

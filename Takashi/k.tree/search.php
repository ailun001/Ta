<?php include "header.php"?>
    <h2>Search trees by name</h2>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Type names.." >

    <table id="myTable">
        <tr class="header">
            <th style="width:60%;">Products</th>
            <th style="width:40%;">Price</th>
        </tr>
        <tr>
            <td> <a href="./category/fruit.php">Initial Apple</td>
            <td>$50</td>
        </tr>
        <tr>
            <td><a href="./category/fruit.php">Nevelina Orange</td>
            <td>$28</td>
        </tr>
        <tr>
            <td><a href="./category/fruit.php">Meter Lemon</td>
            <td>$15</td>
        </tr>
        <tr>
            <td><a href="./category/hedge.php">Paradise Helen</td>
            <td>$20</td>
        </tr>
        <tr>
            <td><a href="./category/hedge.php">Little Gem Magnolia</td>
            <td>$17</td>
        </tr>
        <tr>
            <td><a href="./category/hedge.php">Lemonwood</td>
            <td>$20</td>
        </tr>
        <tr>
            <td><a href="./category/evergreen.php">Cabbage Tree</td>
            <td>$20</td>
        </tr>
        <tr>
            <td><a href="./category/evergreen.php">Evergree Alder</td>
            <td>$25</td>
        </tr>
        <tr>
            <td><a href="./category/evergreen.php">Mistral Pohutukawa</td>
            <td>$15</td>
        </tr>
        <tr>
            <td><a href="./category/nznative.php">Lacebark</td>
            <td>$20</td>
        </tr>
        <tr>
            <td><a href="./category/nznative.php">Rewarewa</td>
            <td>$30</td>
        </tr>
        <tr>
            <td><a href="./category/nznative.php">Maori Princess Pohutukawa</td>
            <td>$15</td>
		 </tr>
        <tr>
            <td><a href="./category/gumtree.php">Baby Blue</td>
            <td></td>
        </tr>
        <tr>
            <td><a href="./category/gumtree.php">Gunnii</td>
            <td></td>
        </tr>
        <tr>
            <td><a href="./category/gumtree.php">Perriniana</td>
            <td></td>
        </tr>
        <tr>
            <td> <a href="./category/palmtree.php">Bungalow Palm</td>
            <td>$20</td>
        </tr>
 
		 <tr>
            <td> <a href="./category/palmtree.php">Costa rica bamboo</td>
            <td>$25</td>
        </tr>
        <tr>
            <td> <a href="./category/palmtree.php">Dypsis Baronii</td>
            <td>$15</td>
        </tr>
        <tr>
            <td><a href="./category/hardwood.php">Black Beech</td>
            <td></td>
        </tr>
        <tr>
            <td><a href="./category/hardwood.php">Red Beech</td>
            <td></td>
        </tr>
     <tr>
            <td><a href="./category/hardwood.php">Silver Beech</td>
            <td></td>
        </tr>
    </table>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
	
<?php include "footer.php"?>
  
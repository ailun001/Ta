<?php 
$url = 'https://tree-ta.herokuapp.com/';
echo '
<!DOCTYPE html>
<html>
<head>
    <title>Plant A Tree</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="'.$url.'styles.css" />
	<script src="store.js" async></script>
</head>
<body>
    <header class="main-header">
        <nav class="nav main-nav">
            <ul>
                <li><a href="'.$url.'index.php">HOME</a></li>
                <li><a href="'.$url.'category.php">CATEGORY</a></li>
				<li><a href="'.$url.'search.php">Search</a></li>
                <li><a href="'.$url.'about.php">ABOUT</a></li>
            </ul>
        </nav>

        <h1 class="band-name band-name-large">TreeCo</h1>
    </header>';
?>
		

<html>
<head>
<title>My Web-Store</title>
</head>

<body>
<h1>Welcome to my Web store</h1>
<ul>
<?php
    $json = file_get_contents('https://product-service');
    $obj = json_decode($json);

    $product = $obj->products;
    foreach ($products as $product) {
        echo "<li>$product</li>
    }
    ?>
    </ul>
    </body>
</html>
<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Tilaushistoria - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="component.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <div class="container">

    <?php
      require_once "navbar.php";
      require_once "conn.php";
      $sessionID = session_id();

      $userID = $_SESSION["id"];


?>

<div id="sisakasviotsikko">
  <h2> Tilaushistoria </h2>
</div>
      <div id="tuotealue">

        <?php

          $sql = "SELECT * FROM products, orders, product_order WHERE product_order.productID=products.productID AND product_order.orderID=orders.orderID AND id = '$userID' ORDER BY orders.orderID";
          $tulokset = $yhteys->query($sql);

          if ($tulokset->num_rows > 0) {
             while($row = $tulokset->fetch_assoc()) {

        ?>


  <div class="tuote">
    <a href="tuote.php?id=<?php echo $row["productID"]; ?>">
      <img src="images/<?php echo $row["thumbnail"]; ?>">
      </a>
     <?php echo $row["name"]; ?>
     <div id="hinta">
       <?php echo $row["price"]; ?>
     </div>
     <?php echo "tilauspvm: " . $row["orderdate"];
     echo "<br>";
     echo "tilausnro: " . $row["orderID"];?>
 </div>

<?php
}
}
?>
</div>


</body>
</html>

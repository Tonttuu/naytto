<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Ostoskori - Puutarhaliike Neilikka</title>
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

      if (isset($_GET["lisaa"])) {
              $productID = mysqli_real_escape_string($yhteys, $_GET["lisaa"]);

              $sql1 = "INSERT INTO cart  (productID, amount, sessionID)
              VALUES ('$productID', '1', '$sessionID')";

              $yhteys->query($sql1);
              header("Location: ostoskori.php");

      }

            if (isset($_GET["delete"])) {
                    $cartID = mysqli_real_escape_string($yhteys, $_GET["delete"]);

                    $sql1 = "DELETE FROM cart WHERE id = $cartID";

                    $yhteys->query($sql1);
                    header("Location: ostoskori.php");

            }
?>

<div id="sisakasviotsikko">
  <h2> Ostoskori </h2>
</div>
      <div id="tuotealue">

        <?php

          $sql = "SELECT * FROM products, cart WHERE cart.productID=products.productID AND sessionID = '$sessionID'";
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
     <a href="ostoskori.php?delete=<?php echo $row["ID"]; ?>">
     <button>
       Poista ostoskorista
     </button>
   </a>
 </div>

<?php
}
} else {
  echo "Ostoskorisi on tyhjä.";
}
 if ($tulokset->num_rows > 0) {
  echo '<div class="tilausnappi">
   <a href="kiitos.php">
    <button> Tilaa </button>
  </a>
  </div>';
} ?>

</div>


</body>
</html>

<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>
  <?php

  require_once "conn.php";

  $productID = mysqli_real_escape_string($yhteys, $_GET["id"]);

  $sql = "SELECT * FROM products WHERE productID = $productID";
  $tulokset = $yhteys->query($sql);

  if ($tulokset->num_rows > 0) {
     while($row = $tulokset->fetch_assoc()) {
       echo $row["name"];
     }
   }?> - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <div class="container">

    <?php
      require_once "navbar.php";


    $productID = mysqli_real_escape_string($yhteys, $_GET["id"]);

    $sql = "SELECT * FROM products WHERE productID = $productID";
    $tulokset = $yhteys->query($sql);

    if ($tulokset->num_rows > 0) {
       while($row = $tulokset->fetch_assoc()) {

  ?>

  <div id="sisakasviotsikko">
    <h2> <?php echo $row["name"]; ?> </h2>
  </div>
  <div id="tuote">
    <img src="images/<?php echo $row["image"]; ?>">
    <div id="hinta2">
      <?php echo $row["price"]; ?>
    </div>
    <a href="ostoskori.php?lisaa=<?php echo $row["productID"]; ?>">
      <input type="submit" value="Lisää ostoskoriin">
      </input>
    </a>
  </div>
  <?php
}
}
 ?>
</body>
</html>

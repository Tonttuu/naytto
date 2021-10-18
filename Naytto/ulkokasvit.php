<!DOCTYPE HTML>
<php><head>
<meta http-equiv="content-type" content="text/php; charset=UTF-8">
<meta charset="UTF-8">
<title>Ulkokasvit - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="component.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <div class="container">

    <?php
      require_once "navbar.php";
      require_once "conn.php"; ?>



        <div id="sisakasviotsikko">
          <h2> Ulkokasvit </h2>
        </div>
        <div id="tuotealue">




      <?php

      $sql = "SELECT * FROM products WHERE category = 'Ulkokasvit'";
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
       <a href="tuote.php?id=<?php echo $row["productID"]; ?>">
       <button>
         Tuotesivulle
       </button>
     </a>
   </div>

<?php
}
}
 ?>
</div>
  <div style="clear: both;"></div>

  </div>

  </body>


  </php>

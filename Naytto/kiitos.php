<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Kiitos tilauksesta - Puutarhaliike Neilikka</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>

    <?php
    require_once "navbar.php";
    require_once "conn.php";

    $userID = $_SESSION["id"];
    $sid = session_id();

    $sql = "INSERT INTO orders (id, orderdate)
    VALUES ($userID, now())";

    $tulokset = $yhteys->query($sql);
      if ($tulokset) {
        $orderID = $yhteys->insert_id;

        $sql = "SELECT * FROM cart WHERE sessionID = '$sid'";
        $tulokset = $yhteys->query($sql);

           while($row = $tulokset->fetch_assoc()) {

             $productID = $row["productID"];
             $amount = $row["amount"];

             $sql2 = "INSERT INTO product_order (orderID, productID, amount)
             VALUES ($orderID, $productID, $amount)";

             $yhteys->query($sql2);

      }
      ?>
          <div id="Tuotteetotsikko">
            <h2> Kiitos kun asioit Puutarhaliike neilikassa! </h2>
            <h2> Tilauksesi on vastaanotettu ja käsittelemme sitä parhaillaan. </h2>
          </div>

      <?php
    }
    ?>






  </body>
  </html>

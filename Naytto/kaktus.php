<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Kaktus - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <div class="container">

    <?php
      require_once "navbar.php";
      require_once "conn.php";

    ?>


  <div id="sisakasviotsikko">
    <h2> Kaktus ruukussa </h2>
  </div>
  <div id="tuote">
    <img src="images/kaktus-8.jpg">
    <div id="hinta2">
      9,99€
    </div>
    <a href="ostoskori.php?lisaa">
      <input type="submit" value="Lisää ostoskoriin">
      </input>
    </a>
  </div>
</body>
</html>

<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Tuotteet - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>
  <div class="container">
    <?php
      require_once "navbar.php";
      require_once "conn.php";

    ?>

  <div id="Tuotteetotsikko">
    <h2> Tuotteet </h2>
    </div>

  <div id="tuotteet">
    <div class="kasvikategoria">
      <a href="sisakasvit.php">
        <img src="images/kaktusthumbnail.jpg">
       Sisäkasvit </a>
    </div>
    <div class="kasvikategoria">
      <a href="ulkokasvit.php">
        <img src="images/rosethumbnail.jpg">
       Ulkokasvit </a>
    </div>
    <div class="kasvikategoria">
      <a href="tyokalut.php">
        <img src="images/lapiothumbnail.jpg">
       Työkalut </a>
    </div>
    <div class="kasvikategoria">
      <a href="kasvienhoito.php">
        <img src="images/lannoite3thumbnail.jpg">
        Kasvien hoito </a>
    </div>
  </div>




  <div style="clear: both;"></div>



</div>
</body>

</html>

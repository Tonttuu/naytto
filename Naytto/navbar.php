
<?php
  require_once "conn.php";
  session_start();
if(isset($_SESSION['id'])) {
    $logbutton = '<a href="logout.php">Kirjaudu ulos</a>';
} else {
    $logbutton = '<a href="login.php">Kirjaudu</a>';
} ?>



<div class="navbar">
  <ul>


      <li <?php if (basename($_SERVER['PHP_SELF']) == "ostoskori.php") {
        echo "id=aktiivinen";
      } ?>
      > <a href="ostoskori.php">

        <img src="images/cart.png"> </a></li>



    <li <?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
      echo "id=aktiivinen";
    } ?>
    > <a href="index.php">Etusivu </a></li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "tuotteet.php") {
      echo "id=aktiivinen";
    } ?>
    > <a href="tuotteet.php">Tuotteet </a>


      <ul id="dropdown">
        <li <?php if (basename($_SERVER['PHP_SELF']) == "sisakasvit.php") {
          echo "id=aktiivinen";
        } ?>
        > <a href="sisakasvit.php"> Sisäkasvit </a></li>


        <li <?php if (basename($_SERVER['PHP_SELF']) == "ulkokasvit.php") {
          echo "id=aktiivinen";
        } ?>
        > <a href="ulkokasvit.php"> Ulkokasvit </a></li>


        <li <?php if (basename($_SERVER['PHP_SELF']) == "tyokalut.php") {
          echo "id=aktiivinen";
        } ?>
        > <a href="tyokalut.php"> Työkalut </a></li>


        <li <?php if (basename($_SERVER['PHP_SELF']) == "kasvienhoito.php") {
          echo "id=aktiivinen";
        } ?>
        > <a href="kasvienhoito.php"> Kasvien hoito </a></li>
      </ul>
    </li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "myymalat.php") {
      echo "id=aktiivinen";
    } ?>
    > <a href="myymalat.php">Myymälät </a></li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "tietoa.php") {
      echo "id=aktiivinen";
    } ?>
    > <a href="tietoa.php">Lisätietoa </a></li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "yhteystiedot.php") {
      echo "id=aktiivinen";
    } ?>
    > <a href="yhteystiedot.php">Yhteystiedot </a></li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "profile.php") {
      echo "id=aktiivinen";
    } ?>
    > <?php
    if (isset($_SESSION["id"])) {
      echo "<a href='profile.php'>Omat tiedot </a>";
    } ?> </li>


    <li <?php if (basename($_SERVER['PHP_SELF']) == "tuotteenlisays.php") {
      echo "id=aktiivinen";
    } ?>
    > <?php
    if (isset($_SESSION["id"]) && $_SESSION["usertype"] == 1) {
      echo "<a href='tuotteenlisays.php'>Lisää tuote </a>";
    } ?> </li>


    <div id="logbutton">
      <li id="search">
        <form action="search.php" method="post">
          <input type="text" name="searchbar" placeholder="Hae tuotteita">
          <input type="submit" name="search" value="Hae">
        </form>
      </li>
    </div>


    <div id="logbutton">
    <li <?php if (basename($_SERVER['PHP_SELF']) == "login.php") {
      echo "id=aktiivinen";
    } ?>
    >
      <?php
          echo $logbutton;
          ?>
    </li>
  </div>


  <div id="logbutton">
    <li <?php if (basename($_SERVER['PHP_SELF']) == "register.php") {
    echo "id=aktiivinen";
  } ?>
  > <?php if (!isset($_SESSION["id"])) {
    echo "<a href='register.php'>Rekisteröidy </a> </li>";
} ?>
  </div>


  </ul>
<div style="clear: both;"></div>
</div>

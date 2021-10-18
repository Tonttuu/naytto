<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Tuotteen lisäys - Puutarhaliike Neilikka</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <?php
    require_once "navbar.php";
    require_once "conn.php";


    if (!isset($_SESSION["id"]) || $_SESSION["usertype"] != 1) {
      header("Location: index.php");
    die();
    }

  ?>

  <div id="myymalat">
    <h2>Lisää tuote</h2>
  </div>

  <div id="lomake">

  <fieldset>
<form action="tuotteenlisays.php" method="post">
  Tuotteen nimi: <input required type="text" name="name"> <br>
  Hinta: <input required type="text" name="price"> <br>
  Kategoria: <input type="text" name="category"> <br>
  Kuva: <input required type="text" name="image"> <br>
  Thumbnail: <input required type="text" name="thumbnail"> <br>
  <input type="submit" name="submit" value="Lisää">

  <?php
//tarkistaa onko kaikki kentät asetettu, ja lisää tietokantaan jos on.

  if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($yhteys, $_POST['name']);
    $price = mysqli_real_escape_string($yhteys, $_POST['price']);
    $category = mysqli_real_escape_string($yhteys, $_POST['category']);
    $image = mysqli_real_escape_string($yhteys, $_POST['image']);
    $thumbnail = mysqli_real_escape_string($yhteys, $_POST['thumbnail']);

    if ($name != "" && $price != ""  && $category != "" && $image != "") {


    $lisayssql = "INSERT INTO products (name, price, category, image, thumbnail)
    VALUES ('$name', '$price', '$category', '$image', '$thumbnail')";

    $tulos = $yhteys->query($lisayssql);

    if ($tulos === TRUE) {
      echo "Tuote lisätty";
    } else if ($tulos === FALSE) {
      echo "Virhe " . $lisayssql . $yhteys->error;
    }
  }
  else {
    echo "Täytä kaikki kentät.";
  }
  }
  ?>


</fieldset>
</form>
</div>
</body>
<html>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Rekisteröinti - Puutarhaliike Neilikka</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

  <?php
    require_once "navbar.php";
    require_once "conn.php";

  ?>

  <div id="myymalat">
    <h2>Luo uusi käyttäjä</h2>
  </div>

  <div id="lomake">

  <fieldset>
<form action="register.php" method="post">
  Käyttäjänimi: <input required type="text" name="username"> <br>
  Salasana: <input required type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Täytyy sisältää vähintään 8 merkkiä, joista yhden täytyy olla iso kirjain, yhden pieni kirjain ja yhden numero."> <br>
  Etunimi: <input required type="text" name="firstname"> <br>
  Sukunimi: <input required type="text" name="surname"> <br>
  Sähköposti: <input required type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> <br>
  <input type="submit" name="submit" value="Rekisteröi">

  <?php
//tarkistaa onko kaikki kentät asetettu, ja lisää tietokantaan jos on.

  if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($yhteys, $_POST['username']);
    $password = mysqli_real_escape_string($yhteys, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $firstname = mysqli_real_escape_string($yhteys, $_POST['firstname']);
    $surname = mysqli_real_escape_string($yhteys, $_POST['surname']);
    $email = mysqli_real_escape_string($yhteys, $_POST['email']);

    if ($username != "" && $password != "" && $firstname != "" && $email != "" && $surname != "") {


    $lisayssql = "INSERT INTO users (username, password, firstname, surname, email)
    VALUES ('$username', '$password', '$firstname', '$surname', '$email')";

    $tulos = $yhteys->query($lisayssql);

    if ($tulos === TRUE) {
      echo "Käyttäjä lisätty";
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

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Profiili - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

<?php
require_once "navbar.php";
require_once "conn.php";

if (!isset($_SESSION["id"])) {
  header("Location: login.php");
die();
}

$sql = "select * FROM users WHERE id=" . $_SESSION["id"];
$tulokset = $yhteys->query($sql);

if ($tulokset->num_rows > 0) {
   while($row = $tulokset->fetch_assoc()) {
      ?>
      <div id="myymalat">
        <h2>Muokkaa tietojasi</h2>
      </div>
        <div id="lomake">
          <fieldset>
            <form action="profile.php" method="post">
              Etunimi: <input required type="text" name="firstname" value="<?php echo $row["firstname"] ?>"> <br>
              Sukunimi: <input required type="text" name="surname" value="<?php echo $row["surname"] ?>"> <br>
              Sähköposti: <input required type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $row["email"] ?>"> <br>
              <input type="submit" name="submit" value="Päivitä">
              <a href="tilaushistoria.php"> Tilaushistoria </a>
          </fieldset>
        </div>
    <?php

   }
}

if (isset($_POST["submit"])) {
  $firstname = mysqli_real_escape_string($yhteys, $_POST['firstname']);
  $surname = mysqli_real_escape_string($yhteys, $_POST['surname']);
  $email = mysqli_real_escape_string($yhteys, $_POST['email']);

  $sql = "UPDATE users SET firstname = '$firstname', surname = '$surname', email = '$email' WHERE id = " . $_SESSION['id'];
  mysqli_query($yhteys, $sql);
}

   ?>
</body>
</html>

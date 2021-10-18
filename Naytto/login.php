<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Kirjautuminen - Puutarhaliike Neilikka</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>



    <?php
      require_once "navbar.php";
      require_once "conn.php";


      if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($yhteys, $_POST['username']);
    $password = mysqli_real_escape_string($yhteys, $_POST['password']);


    if (empty($username)){
      header("Location: login.php?login=error");
      exit();

    }elseif (empty($password)) {
      header("Location: login.php?login=error2");
      exit();
    } else {
      $sql = "SELECT * FROM  users WHERE username = '$username'";
      $result = mysqli_query($yhteys, $sql);
      $resultcheck = mysqli_num_rows($result);
      if ($resultcheck < 1) {
        header("Location: login.php?login=error3");
        exit();
      } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $passwordcheck = password_verify($password, $row['password']);
            if ($passwordcheck === false) {
              header("Location: login.php?login=error4");
              exit();
            } elseif ($passwordcheck === true) {
              $_SESSION['id'] = $row['id'];
              $_SESSION['firstname'] = $row['firstname'];
              $_SESSION['surname'] = $row['surname'];
              $_SESSION['usertype'] = $row['usertype'];
              $_SESSION['email'] = $row['email'];
              header("Location: index.php?login=success");
              exit();
            }
        }
      }
    }
  }
  ?>
  <div id="myymalat">
    <h2>Kirjaudu sisään</h2>
  </div>
      <div id="lomake">
        <fieldset>
          <form action="" method="post">
            Käyttäjänimi: <input type="text" name="username"> <br>
            Salasana: <input type="password" name="password"> <br>
            <input type="submit" name="submit" value="Kirjaudu"><br>
            <a href="register.php"> Ei käyttäjää? Rekisteröi käyttäjä tästä!</a>
          </form>
        </fieldset>
      </div>

  </body>
</html>

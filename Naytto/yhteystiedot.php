<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Yhteystiedot - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <?php
    require_once "navbar.php";
    require_once "conn.php";

  ?>

  <div id="info">
    <p>
      Voit ottaa meihin yhteyttä</p>
      <ul>
        <li>puhelimitse yksittäisiin myymälöihin</li>
        <li>sähköpostitse: asiakaspalvelu@puutarhaliikeneilikka.fi</li>
        <li>alla olevalla lomakkeella</li>
      </ul>

  </div>
  <div id="lomake">
    <fieldset>
      Nimi: <input type="text" name="name">
      Sähköposti: <input type="text" name="email">
      Aihe: <select name="subject">
        <option disabled selected hidden> Valitse </option>
        <option> Kysymys tuotteista </option>
        <option> Tilaus </option>
        <option> Yhteydenottopyyntö </option>
        <option> Muu </option>
      </select>
      Viesti: <textarea rows="4"> </textarea><br>
      Haluan tilata Puutarhaliike Neilikan uutiskirjeen:
      <input type="radio" name="uutiskirje" value="yes"> Kyllä
      <input type="radio" name="uutiskirje" value="no"> En
      <br>
      <input type="submit" name="laheta" value="Lähetä">
    </fieldset>
  </div>




</div>
</body>
</html>

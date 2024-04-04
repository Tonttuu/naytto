<!DOCTYPE HTML>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Etusivu - Puutarhaliike Neilikka</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="component.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>

  <div class="container">

    <?php
      require_once "navbar.php";
      require_once "conn.php";

    ?>


  <div id="newscontainer">
  <div id="h3">
    <h3> Uutisia </h3>
  </div>
  <article id="news">
    <p>
      2.1.2016 Hyvää uutta vuotta!
      Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia.
    </p>
  </article>
    <article id="news">
    <p>
      14.12.2015 Joulukukat edullisesti meiltä.
      Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.
    </p>
  </article>
    <article id="news">
    <p>
      1.9.2015 Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten.
      Meiltä löydät kaikki työkalut ja tarvikkeet.
    </p>
  </article>
</div>

  <div id="tervetuloa">
   <h2>Tervetuloa Puutarhaliike Neilikan kotisivuille! </h2>
    <p>  Meiltä löydät sekä sisä- että ulkokasvit ja kaiken tarvitsemasi kasvien hoitoon.</p>
  </div>

  <article id="cc-slider">
    <input checked="checked" name="cc-slider" id="slide1" type="radio">
    <input name="cc-slider" id="slide2" type="radio">
    <input name="cc-slider" id="slide3" type="radio">
    <input name="cc-slider" id="slide4" type="radio">
    <input name="cc-slider" id="slide5" type="radio">
    <div id="cc-slides">
      <div id="overflow">
        <div class="inner">
          <article>
            <div class="cctooltip">
              <h3>Kaktus ruukussa</h3>
              <h4><a href="kaktus.php">Tuotesivulle</a></h4>
            </div>
            <img src="images/kaktus-8.jpg">
          </article>
          <article>
            <div class="cctooltip">
              <h3>Punainen ruusu</h3>
              <h4><a href="kaktus.php">Tuotesivulle</a></h4>
            </div>
            <img src="images/rose.jpg"> </article>
          <article>
            <div class="cctooltip">
              <h3>Biolan lannoite</h3>
              <h4><a href="kaktus.php">Tuotesivulle</a></h4>
            </div>
            <img src="images/lannoite3.jpg">
          </article>
          <article>
            <div class="cctooltip">
              <h3>Fiskars classic Lapio</h3>
              <h4><a href="kaktus.php">Tuotesivulle</a></h4>
            </div>
            <img src="images/lapio.jpg">
          </article>
          <article>
            <div class="cctooltip">
              <h3>Pine tree-hanska</h3>
              <h4><a href="kaktus.php">Tuotesivulle</a></h4>
            </div>
            <img src="images/hanska.jpg">
          </article>
        </div>
      </div>
    </div>
    <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
      <label for="slide5"></label>
    </div>
  </article>


<div style="clear: both;"></div>

</div>

</body>


</html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>CoinDB</title>
  <script src="design/javascript/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="design/css/style_cards.css">
  <script src="design/javascript/style_card.js"></script>
</head>
  <body>
    <div class="container" id="container1">
      <div class="card" id="card1">
        <div class="font">
          <div class="div_image">
            <img class="image" src="images/test.png"  />
          </div>
          <div class="card_content">
            <p><h1>Testmünze</h1>
              <br />
              Hier stehen verschiedene Informationen<br />
              dieser Münze drin.</p>
              <p id="more">Mehr...</p>
              <button class="button" id= "edit">Bearbeiten</button>
              <button class="button" id="delete" >Löschen</button>
          </div>
        </div>
        <div class="back">
            <p><h1>Testmünze</h1>
              <br />
              Hier stehen verschiedene Informationen<br />
              dieser Münze drin.</p>
              <p>
              Hier stehen verschiedene Informationen<br />
              dieser Münze drin.
              </p>
              <p>
              Hier stehen verschiedene Informationen<br />
              dieser Münze drin.
              </p>
              <p>
              Hier stehen verschiedene Informationen<br />
              dieser Münze drin.
              </p>
              <button class="closebutton" id="close">X</button>
        </div>
        <div class="card_zoomin_content">
          <?php include_once __DIR__. "/view/view_coinedit.php"; ?>
        </div>
  </div>
  </body>
</html>

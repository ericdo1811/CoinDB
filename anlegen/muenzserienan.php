<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anlegen.js" type="text/javascript"></script>
    <link href="tabellea.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php



        echo '<div name="anlegenmuenzserien">
            <table id="table">

                    <tr>
                  <th>Münzserie: </th>
                <td><input type="text" class="text" id="ms"><br></td>
                </tr>

                <input type="button" value="✔" id="enter" name="submit" onClick="msan()">
                </table>';

    include("connection.php");
    require_once "funktionen_anlegen.php";
    if(isset($_GET["ms"]))
    {
      muenzserienan($handler,$_GET["ms"]);
        // $ms = $_GET["ms"];
      //   $smt = $handler->prepare("INSERT INTO muenzserien(muenzserie) VALUES(:muenzserien)");
      //  $smt->bindParam(":muenzserien",$ms);
      //   $smt->execute();
    }
echo'  </div>';


    ?>

    </body>
</html>

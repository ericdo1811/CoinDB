<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabellea.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php



        echo '<div name="laenderan">
            <table id="table">
                    <tr>
                  <th>Land: </th>
                <td><input type="text" class="text" id="la"><br></td>
                </tr>

                <input type="button" value="✔" name="submit" id="enter" onclick="laan()">
                </table>
                </div>';


include("connection.php");
require_once "funktionen_anlegen.php";
    if(isset($_GET["la"]))
    {
        // $la = $_GET["la"];
        laenderan($handler,$_GET["la"]);
      //   $smt = $handler->prepare("INSERT INTO laender(land) VALUES(:land)");
      //  $smt->bindParam(":land",$la);
      //   $smt->execute();
    }
    ?>

    </body>
</html>

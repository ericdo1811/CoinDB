<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabellea.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
        echo '<div name="anlegengewicht">
            <table id="table">
                    <tr>
                  <th>Gewicht: </th>
                <td><input type="text" class="text" id="ge"><br></td>
                </tr>

                <input type="button" value="✔" id="enter" onclick="gean()">
                </table>
                </div>';
    include("connection.php");
    require_once "funktionen_anlegen.php";

    if(isset($_GET["ge"]))
    {
        gewichtan($handler,$_GET["ge"]);
      //   $smt = $handler->prepare("INSERT INTO gewicht(gewicht) VALUES(:gewicht)");
      //  $smt->bindParam(":gewicht",$ge);
      //   $smt->execute();
    }
    ?>

    </body>
</html>

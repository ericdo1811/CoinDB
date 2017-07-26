<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabellea.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php
        echo '<div name="anlegenmaterial">
            <table id="table">
                    <tr>
                  <th>Material: </th>
                <td><input type="text" class="text" id="ma"><br></td>
                </tr>

                <input type="button" value="✔" id="enter" name="submit" onclick="maan()">
                </table>
                </div>';
    include("connection.php");
    require_once "funktionen_anlegen.php";
    if(isset($_GET["ma"]))
    {
        // $ma = $_GET["ma"];
        materialan($handler,$_GET["ma"]);
      //   $smt = $handler->prepare("INSERT INTO material(material) VALUES(:material)");
      //  $smt->bindParam(":material",$ma);
      //   $smt->execute();
    }





    ?>

    </body>
</html>

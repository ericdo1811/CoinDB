<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    </head>
<body>
    <?php



        echo '<div name="anlegenwert">
            <table>
            <form method="post" action="wert.php"><br>

                    <tr>
                  <th>Material: </th>
                <td><input type="text" name="we" class="text"><br></td>
                </tr>

                <input type="submit" class="enter" value="✔" name="submit">
                </form>
                </table>
                </div>';
    include("connection.php");
    require_once "funktionen_anlegen.php";
    if(isset($_POST["we"]))
    {
        // $we = $_POST["we"];
        wertan($handler,$_POST["we"]);
      //   $smt = $handler->prepare("INSERT INTO muenzserien(wert) VALUES(:wert)");
      //  $smt->bindParam(":wert",$we);
      //   $smt->execute();

        echo "ok";
    }





    ?>

    </body>
</html>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabellea.css" type="text/css" rel="stylesheet">
        <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anlegen.js" type="text/javascript"></script>
</head>

<body>
    <?php
    require_once "funktionen_anlegen.php";
    include("connection.php");

        echo '<div name="anlegenallemuenzen">
            <table id="table">
          <br>
                <tr>
                <th>Bezeichnung:</th>
                <td><input class="text" type="text" id="bz"><br></td>
                </tr>';

        //----------------------------------------------------------------------------------------Münzserien--------------------------------------------------
                    echo'<tr>
                 <th>Münzserie:</th>';

        $smtm = $handler->prepare("SELECT * FROM muenzserien;");
        $smtm->execute();
        $result = $smtm->fetchAll();



        echo'<td><select class="select" id="ms"> ';
            foreach($result as $einzel)
            {

            echo'<option value="'.$einzel[0].'">'.$einzel[1];
            }
            echo '</td>
                </tr>';
            //---------------------------------------------------------------------------------------------Material----------------------------------------------------

            echo'        <tr>
                  <th>Material:</th>';
                $smtma = $handler->prepare("SELECT * FROM material;");
                $smtma->execute();
                $result = $smtma->fetchAll();



        echo'<td><select class="select" id="ma"> ';
            foreach($result as $einzel)
            {

            echo'<option value="'.$einzel[0].'">'.$einzel[1];
            }
            echo '</td>
                </tr>';

         //-------------------------------------------------------------------------------------------------------------------------------------------
    echo'                <tr>
                  <th>Wert:</th>
                <td><input type="text" class="text" id="we"><br></td>
                </tr>

                    <tr>
                  <th>Kaufdatum:</th>
                <td><input type="text" class="text" id="kd"><br></td>
                </tr>

                    <tr>
                  <th>Preis: </th>
                <td><input type="text" class="text" id="pr"><br></td>
                </tr>
                    <tr>
                  <th>Gewicht: </th>
                <td><input type="text" class="text" id="ge"><br></td>
                </tr>';

    //-------------------------------------------------------------------------------------------------Länder------------------------------------------------------
                echo'    <tr>
                  <th>Land: </th>';


        $smtla = $handler->prepare("SELECT * FROM laender;");
        $smtla->execute();
        $result = $smtla->fetchAll();



        echo'<td><select class="select" id="la"> ';
            foreach($result as $einzel)
            {

            echo'<option value="'.$einzel[0].'">'.$einzel[1];
            }
            echo '</td>
                </tr>

                <input type="submit" value="✔" id="enter" name="submit" onclick="muan()">
                </table>
                </div>';



    if(isset($_GET["bz"]))
    {
    // if($_POST["bz"] AND $_POST["ms"] AND $_POST["we"] AND $_POST["kd"] AND $_POST["pr"] AND $_POST["ge"] AND                      $_POST["la"]!= NULL)
    //    {
            // $bz = $_GET["bz"];
            // $ms = $_GET["ms"];
            $ma = $_GET["ma"];
            // $la = $_GET["la"];
            // $kd = $_GET["kd"];
            // $pr = $_GET["pr"];
            // $we = $_GET["we"];
            // $ge = $_GET["ge"];
            muenzenan($handler,$_GET["bz"],$_GET["pr"],$_GET["kd"],$_GET["ms"],$_GET["ge"],$_GET["la"],$_GET["we"]);
            // $smt = $handler->prepare("INSERT INTO muenzen(bezeichnung, preis, wert, datum, ms_id, g_ID, l_ID) VALUES(:bezeichnung, :preis, :wert,:datum, :muenzserie, :gewicht, :wert);");
            // $smt->bindParam(":bezeichnung",$bz);
            // $smt->bindParam(":preis",$pr);
            // $smt->bindParam(":datum",$kd);
            // $smt->bindParam(":muenzserie",$ms);
            // $smt->bindParam(":gewicht",$ge);
            // $smt->bindParam(":land",$la);
            // $smt->bindParam(":wert",$we);
            // $smt->execute();

    //    }
    }
    ?>

    </body>
</html>

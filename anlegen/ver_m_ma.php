<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anlegen.js" type="text/javascript"></script>
    <link href="tabellea.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
include("connection.php");
require_once "funktionen_anlegen.php";

    $query="SELECT m_ID,bezeichnung FROM muenzen";
    $smt = $handler->query($query);
    $resultm = $smt->fetchAll();

        $query2="SELECT ma_ID,material FROM material";
    $smt2 = $handler->query($query2);
    $resultma = $smt2->fetchAll();




        echo '<div name="ver_m_ma">
            <table>
                    <tr>
                  <th>Münze</th>
                  <th>Material</th>
                </tr>';

                 echo'<tr><td><select name="m" id="m" class="selectv">';

               foreach($resultm as $einzelm)
               {
                   echo'<option value="'.$einzelm[0].'">' . $einzelm[1].'</option>';
                }
                echo'</select></td>';

                 echo'<td><select name="ma" id="ma" class="selectv">';

               foreach($resultma as $einzelma)
               {
                   echo'<option value="'.$einzelma[0].'">' . $einzelma[1].'</option>';
                }
                echo'</select></td>

        <input type="button" name="submitv" id="enter" value="✔" onclick="ver_m_ma()">
               </tr></table>
                </div>';


    if(isset($_GET["m"],$_GET["ma"]))
    {
      ver_m_maan($handler,$_GET["m"],$_GET["ma"]);
        // $m = $_GET["m"];
        // $ma = $_GET["ma"];
      //   $smt = $handler->prepare("INSERT INTO ver_ma(m_ID,ma_ID) VALUES(:m_ID,:ma_ID)");
      //  $smt->bindParam(":m_ID",$m);
      //   $smt->bindParam(":ma_ID",$ma);
      //   $smt->execute();
    }
    ?>

    </body>
</html>
</html>

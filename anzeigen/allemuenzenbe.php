<html>
<head>
    <link href="tabelle.css" type="text/css" rel="stylesheet">
        <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anzeigen.js" type="text/javascript"></script>
    <script src="../anlegen/ajax_anlegen.js" type="text/javascript"></script>
</head>

<body>
<?php

include("funktionen_bearbeiten.php");
include("connection.php");

$submit = $_GET["submit"];
$query= "SELECT m.bezeichnung, m.preis, m.datum, g.gewicht,g.g_ID,m.wert,ms.muenzserie,ms.ms_ID,ma.ma_ID,ma.material,la.land, la.l_ID, m.m_ID
                                FROM muenzserien AS ms
                                INNER JOIN muenzen AS m ON m.ms_ID = ms.ms_ID
                                INNER JOIN gewicht AS g ON m.g_ID = g.g_ID
                                INNER JOIN laender AS la ON la.l_ID = m.l_ID
                                INNER JOIN ver_ma AS vm ON vm.m_ID= m.m_ID
                                INNER JOIN material AS ma ON ma.ma_ID = vm.ma_ID WHERE m.m_ID=" . $submit;

        $smt = $handler->query($query);
        $result = $smt->fetchAll();


        $anzahl = count($result);
    $i=1;

                echo '<table id="table">
                <tr>
                    <th>Bezeichnung</th>
                    <th>Preis</th>
                    <th>Kaufsdatum</th>
                    <th>Wert</th>
                    <th>vorheriges <br>Gewicht</th>
                    <th>Gewicht</th>
                    <th>vorherige <br> Münzserie</th>
                    <th>Münzserie</th>
                    <th>vorheriges <br> Material</th>
                    <th>Material</th>
                    <th>vorheriges <br> Land</th>
                    <th>Land</th>
                    <th></th>
                </tr>';


    //----------------------------------------------------------------------------->Hier weiter machen das $result2 geht nicht zeigt eine Daten an


           foreach($result as $einzel)
            {
                  //print "<pre>";
                 //print_r($einzel);
                //   print "</pre>";

            echo'   <tr>
                        <td><input type="text" name="bz" id="bz" value="'.$einzel[0].'"></td>
                        <td><input type="text" name="pr" id="pr" value="'.$einzel[1].'"></td>
                        <td><input type="text" name="kd" id="kd" value="'.$einzel[2].'"></td>
                        <td><input type="text" name="we" id="we" value="'.$einzel[5].'"></td>';



    //-------------------------------------------------------------------------------------------Gewicht einlesen---------------------------------------------
            echo'<td><input type="text" name="vge" id="vge" value="'.$einzel[3].'"></td>';

              $resultge = gewichtei($handler);
                echo'<td><select name="ge" id ="ge">';

               foreach($resultge as $einzelge)
               {
                   echo'<option value="'.$einzelge[0].'">' . $einzelge[1].'</option>';
                }
                echo'</select></td>';
    //--------------------------------------------------------------------------------------------Münzserien einlesen---------------------------------------
                echo'<td><input type="text" name="vms" id="vms" value="'.$einzel[6].'"></td>';

               $resultms = muenzserieei($handler);

               echo '   <td><select name="ms" id="ms">';

                foreach($resultms as $einzelms)
                {
                    echo'<option value="'.$einzelms[0].'">' . $einzelms[1] .'</option>';
                }
                echo'</select></td>';

    //----------------------------------------------------------------------------------------------------Material einlesen----------------------------

               echo'<td><input type="text" name="vma" id="vma" value="'.$einzel[9].'"></td>';

               $resultma = materialei($handler);
                    echo'    <td><select name="ma" id ="ma">';

               foreach($resultma as $einzelma)
               {
                   echo'<option value="'.$einzelma[0].'">' . $einzelma[1] .'</option>';
               }
            echo '</select></td>';

    //-----------------------------------------------------------------------------------------------------Land einlesen------------------------------------
                echo'<td><input type="text" name="vla" id="vla" value="'.$einzel[10].'"></td>';

               $resultla = landei($handler);
                    echo'    <td><select name="la" id="la">';

               foreach($resultla as $einzella)
               {
                   echo'<option value="'.$einzella[0].'">' . $einzella[1] .'</option>';
               }
               echo '</select></td>';
    //-----------------------------------------------------------------------------------------------------Bestätigungs-Button-----------------------------
                    echo '<td><input type="button" name="submit" id="edit" value="✎" onclick="mube('.$einzel[12].')"></td>';

                     $bearbeiten = muenzenbe($handler);

                $i++;
           }

    echo' </td></table>';
    //$handler2 = load_handler();

    echo $bearbeiten;

?>
    </body>
    </html>

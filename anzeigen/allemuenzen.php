<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="tabelle.css" type="text/css" rel="stylesheet">
        <script src="../jquery.js" type="text/javascript"></script>
        <script src="ajax_anzeigen.js" type="text/javascript"></script>
    </head>


    <body>

        <?php
        include("connection.php");
        include("funktionen_bearbeiten.php");

        $f=1;
        $i=1;
        $query= "SELECT m.bezeichnung, m.preis, m.datum, g.gewicht,m.wert,ms.muenzserie,ma.material,la.land,m.m_ID
                                FROM muenzserien AS ms
                                INNER JOIN muenzen AS m ON m.ms_ID = ms.ms_ID
                                INNER JOIN gewicht AS g ON m.g_ID = g.g_ID
                                INNER JOIN laender AS la ON la.l_ID = m.l_ID
                                INNER JOIN ver_ma AS vm ON vm.m_ID= m.m_ID
                                INNER JOIN material AS ma ON ma.ma_ID = vm.ma_ID;";

        $smt = $handler->query($query);
        $result = $smt->fetchAll();

                echo '<table id="table">
                <tr>
                    <th>Bezeichnung</th>
                    <th>Preis</th>
                    <th>Kaufsdatum</th>
                    <th>Gewicht</th>
                    <th>Wert</th>
                    <th>Münzserie</th>
                    <th>Material</th>
                    <th>Land</th>
                    <th>Bild</th>
                    <th></th>
                    <th></th>
                </tr>';


            foreach($result as $einzel)
            {
                echo'   <tr>
                        <td>'.$einzel[0].'</td>
                        <td>'.$einzel[1].' €</td>
                        <td>'.$einzel[2].'</td>
                        <td>'.$einzel[3].'</td>
                        <td>'.$einzel[4].'</td>
                        <td>'.$einzel[5].'</td>
                        <td>'.$einzel[6].'</td>
                        <td>'.$einzel[7].'</td>
                        <td><img id="bild" src="../bilder/'.$einzel[0].'.png"></td>
                        <td><input type="button" id="edit" value="✎" onclick="submitbe(' . $einzel[8].')"></td>
                        <td><input type="button" id="submit" value="X" onclick="submitlo(' . $einzel[8].')"></td>
                    </tr>';
                $i++;
        }
        echo' </table>';
            $löschen = muenzelo($handler);
        echo $löschen;
?>
    </body>
</html>

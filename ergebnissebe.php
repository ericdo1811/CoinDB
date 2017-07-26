<html>

    <?php
    session_start();
    ?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="tabelle.css" type="text/css" rel="stylesheet">
        <link href="tabelleaan.css" type="text/css" rel="stylesheet">
        <script src="../jquery.js" type="text/javascript"></script>
        <script src="ajax_anzeigen.js" type="text/javascript"></script>
        <script src="ajax_anlegen.js" type="text/javascript"></script>

    </head>


    <body>

        <?php
        include("connection.php");
        include("anzeigen/funktionen_bearbeiten.php");


           $such = "%" . $_SESSION["suchtext"] . "%";
            $submit = $_GET["submit"];


            $smt = $handler->prepare('SELECT m.bezeichnung, m.preis, m.datum, g.gewicht,g.g_ID,m.wert,ms.muenzserie,ms.ms_ID,ma.ma_ID,
                                ma.material,la.land, la.l_ID, m.m_ID
                                FROM muenzserien AS ms
                                INNER JOIN muenzen AS m ON m.ms_ID = ms.ms_ID
                                INNER JOIN gewicht AS g ON m.g_ID = g.g_ID
                                INNER JOIN laender AS la ON la.l_ID = m.l_ID
                                INNER JOIN ver_ma AS vm ON vm.m_ID= m.m_ID
                                INNER JOIN material AS ma ON ma.ma_ID = vm.ma_ID
                                WHERE m.bezeichnung LIKE :such AND m.m_ID = :submit OR
                                m.preis LIKE :such AND m.m_ID = :submit OR
                                m.datum LIKE :such AND m.m_ID = :submit OR
                                g.gewicht LIKE :such AND m.m_ID = :submit OR
                                m.wert LIKE :such AND m.m_ID = :submit OR
                                ms.muenzserie LIKE :such AND m.m_ID = :submit OR
                                ma.material LIKE :such AND m.m_ID = :submit OR
                                la.land LIKE :such AND m.m_ID = :submit');

        $smt->bindParam(":such",$such);
        $smt->bindParam(":submit",$submit);
        $smt->execute();
        $alle = $smt->fetchAll();



        echo'<table id="table">
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



        foreach($alle as $einzel)
        {

            echo' <tr>
                        <td><input type="text" id="bz" name="bz" value="' . $einzel[0] . '"</td>
                        <td><input type="text" id="pr" name="pr" value="' . $einzel[1] . '"</td>
                        <td><input type="text" id="kd" name="kd" value="' . $einzel[2] . '"</td>
                        <td><input type="text" id="ge" name="ge" value="' . $einzel[3] . '"</td>
                       <td><input type="text" id="we" name="we"  value="' . $einzel[5] . '"</td>
                        <td><input type="text" id="ms" name="ms" value="' . $einzel[6] . '"</td>
                        <td><input type="text" id="ma" name="ma" value="' . $einzel[9] . '"</td>
                        <td><input type="text" id="la" name="la" value="' . $einzel[10] . '"</td>
                        <td><input type="button" id="edit" value="✎" onclick="erbe(' . $einzel[12].')"></td>
                    </tr>';
        }

        muenzenbe($handler);
        ?>

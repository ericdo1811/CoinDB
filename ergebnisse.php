<html>
   <?php
    session_start();
    ?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link href="tabelle.css" type="text/css" rel="stylesheet">
        <link href="tabellean.css" type="text/css" rel="stylesheet">
        <script src="../jquery.js" type="text/javascript"></script>
        <script src="ajax_anzeigen.js" type="text/javascript"></script>
    </head>


    <body>

        <?php

        include("connection.php");
        include("anzeigen/funktionen_bearbeiten.php");


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


        $alle = suchen($handler);

        foreach($alle as $einzel)
        {

            echo' <tr>
                        <td>' . $einzel[0] . '</td>
                        <td>' . $einzel[1] . '</td>
                        <td>' . $einzel[2] . '</td>
                        <td>' . $einzel[3] . '</td>
                        <td>' . $einzel[5] . '</td>
                        <td>' . $einzel[6] . '</td>
                        <td>' . $einzel[9] . '</td>
                        <td>' . $einzel[10] . '</td>
                        <td><img id="bild" src="../bilder/'.$einzel[0].'.jpg"></td>
                        <td><input type="button" id="edit" value="✎" onclick="submiter(' . $einzel[12].')"></td>
                        <td><input type="button" id="submit" value="X" onclick="erlo(' . $einzel[12].')"></td>
                    </tr>';
        }



        $_SESSION["suchtext"] = $_GET["suchtext"];

        muenzelo($handler);
        ?>

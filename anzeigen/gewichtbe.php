<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anzeigen.js" type="text/javascript"></script>
    <script src="../anlegen/ajax_anlegen.js" type="text/javascript"></script>
</head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");

    $submit  = $_GET["submit"];

    $query="SELECT * FROM gewicht WHERE g_ID=" .$submit;
    $smt=$handler->query($query);
    $alle  = $smt->fetchAll();

    echo '<table id="table">
            <tr>
                <th>Gewichte</th>
            </tr>';
                foreach ($alle as $einzelgewicht)
                    {
                        echo '<tr>
                                <td><input type="text" id="ge" name="ge" value="'.$einzelgewicht[1]. '"></input></td>
                                <td><input type="button" id="edit" value="✎" onclick="gebe(' . $einzelgewicht[0].')"></td>
                            </tr>';
                    }
    echo'</table>';

    $bearbeiten = gewichtbe($handler);
    echo $bearbeiten;
    ?>

    </body>
</html>

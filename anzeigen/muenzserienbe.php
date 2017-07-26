<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");

    $submit = $_GET["submit"];
    $query = "SELECT * FROM muenzserien WHERE ms_ID =".$submit;
    $smt = $handler->query($query);
    $alle = $smt->fetchAll();

    echo '<table id="table">
            <tr>
                <th>Münzserie</th>
            </tr>';
                foreach($alle as $muenzserie)
                    {
                        echo'<tr>
                                <td><input type=text" id="ms" name="ms" value="'.$muenzserie[1].'"></input></td>
                                <td><input type="button" id="edit" value="✎" onclick="msbe(' . $muenzserie[0].')"></td>
                            </tr>';
                    }
    echo'    </table>';


    $bearbeiten = muenzserienbe($handler);

    ?>

    </body>
</html>

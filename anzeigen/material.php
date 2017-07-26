<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");


$alle=materialei($handler);

    echo '<table id="table">
            <tr>
                <th>Material</th>
            </tr>';
                foreach($alle as $material)
                    {
                        echo'<tr>
                                <td>'.$material[1].'</td>
                                <td><input type="button" id="edit" value="✎" onclick="submitbema(' . $material[0].')"></td>
                                <td><input type="button" id="submit" value="X" onclick="malo(' . $material[0].')"></td>
                            </tr>';
                    }
    echo'    </table>';

    materiallo($handler);

    ?>

    </body>
</html>

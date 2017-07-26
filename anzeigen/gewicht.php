<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");

        $alle=gewichtei($handler);

    echo '<table id="table">
            <tr>
                <th>Gewichte</th>
            </tr>';
                foreach ($alle as $einzelgewicht)
                    {
                        echo '<tr>
                                <td>'.$einzelgewicht[1].' kg</td>
                                <td><input type="button" id="edit" value="✎" onclick="submitbege(' . $einzelgewicht[0].')"></td>
                                <td><input type="button" id="submit" value="X" onclick="gelo(' . $einzelgewicht[0].')"></td>
                            </tr>';
                    }
    echo'</table>';

    gewichtlo($handler);
    ?>

    </body>
</html>

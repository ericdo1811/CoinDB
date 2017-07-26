<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");


$alle=muenzserieei($handler);

    echo '<table id="table">
            <tr>
                <th>Münzserie</th>
            </tr>';
                foreach($alle as $muenzserie)
                    {
                        echo'<tr>
                                <td>'.$muenzserie[1].'</td>
                                <td><input type="button" id="edit" value="✎" onclick="submitbems(' . $muenzserie[0].')"></td>
                                <td><input type="button" id="submit" value="X" onclick="mslo(' . $muenzserie[0].')"></td>
                            </tr>';
                    }
    echo'    </table>';

       muenzserienlo($handler);
    ?>

    </body>
</html>

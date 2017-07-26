<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="tabelle.css" type="text/css" rel="stylesheet">

    </head>
<body>
    <?php
    include("connection.php");
    include("funktionen_bearbeiten.php");


   $alle=landei($handler);

    echo '<table id="table">
            <tr>
                <th>Land</th>
            </tr>';
                foreach($alle as $land)
                    {
                        echo'<tr>
                                <td>'.$land[1].'</td>
                                <td><input type="button" id="edit" value="✎" onclick="submitbela(' . $land[0].')"></td>
                                <td><input type="button" id="submit" value="X" onclick="lalo(' . $land[0].')"></td>
                            </tr>';
                    }
    echo'    </table>';

    laenderlo($handler);
    ?>

    </body>
</html>

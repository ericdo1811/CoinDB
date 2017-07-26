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
    $query = "SELECT * FROM material WHERE ma_ID=".$submit;
    $smt = $handler->query($query);
    $alle = $smt->fetchAll();

    echo '<table id="table">
            <tr>
                <th>Material</th>
            </tr>';
                foreach($alle as $material)
                    {
                        echo'<tr>
                                <td><input type="text" id="ma" name="ma" value="'.$material[1].'"></input></td>
                                <td><input type="button" id="edit" value="✎" onclick="mabe(' . $material[0].')"></td>
                            </tr>';
                    }
    echo'    </table>';

        $bearbeiten = materialbe($handler);
        echo $bearbeiten;
    ?>

    </body>
</html>

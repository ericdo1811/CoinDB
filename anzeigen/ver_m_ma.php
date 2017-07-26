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

    
    $query="SELECT v.ma_ID, v.m_ID, m.bezeichnung, ma.material,v.v_ma_id FROM ver_ma AS v
           INNER JOIN material AS ma ON v.ma_ID = ma.ma_ID
            INNER JOIN muenzen AS m ON v.m_ID = m.m_ID";
    $smt = $handler->query($query);
    $alle = $smt->fetchAll();
    
    
        echo '
            <table id="table">
                    <tr>
                  <th>Material</th> 
                  <th>Münze</th> 
                </tr>';
                
    foreach($alle as $einzel)
    {
        echo '<tr>
                <td>'. $einzel[3] . '</td>
                <td>' . $einzel[2] . '</td>      
                <td><input type="button" id="edit" name="edit" value="✍" onclick="submitver(' . $einzel[1] .')"></td>
                <td><input type="button" id="submit" name="submit" value="X" onclick="ver_m_malo('.$einzel[4].')"></td>
            </tr>';
    }
    
    echo '</table>';
    
    verbindunglo($handler);
    ?>
    
    </body>
</html>
</html>
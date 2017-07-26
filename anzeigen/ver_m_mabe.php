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

    $submit = $_GET["submit"];
//------------------------------------------------------------------------------------------------------alte Daten reinladen lassen------------------------    
$query="SELECT v.ma_ID, v.m_ID, m.bezeichnung, ma.material, v.v_ma_id FROM ver_ma AS v
            INNER JOIN material AS ma ON v.ma_ID = ma.ma_ID
            INNER JOIN muenzen AS m ON v.m_ID = m.m_ID
            WHERE m.m_id=" . $submit;
    $smt = $handler->query($query);
    $alle = $smt->fetchAll();
//-------------------------------------------------------------------------------------------------Material------------------------------------------
        $queryma="SELECT * FROM material";
    $smt = $handler->query($queryma);
    $allema = $smt->fetchAll();
//-----------------------------------------------------------------------------------------------Münze------------------------------------------------
        $querym="SELECT * FROM muenzen";
    $smt = $handler->query($querym);
    $allem = $smt->fetchAll();
//--------------------------------------------------------------------------------------------------------------------------------------------------
        echo '
            <table>
                    <tr>
                  <th>Material</th> 
                  <th>Münze<th>
                </tr>';
                
                 echo'<tr><td><select name="ma" id ="ma">';
               
               foreach($alle as $einzel2)
               {
                   foreach($allema as $einzelma)
                    {
                       if($einzel2[0] == $einzelma[0])
                       {
                           echo'<option selected = "selected" value="'.$einzelma[0].'">' . $einzelma[1].'</option>';
                       }
                       else
                            {
                                echo'<option value="'.$einzelma[0].'">' . $einzelma[1].'</option>';
                            }
                   }
                }
                echo'</select></td>';
                
                 echo'<td><select name="m" id ="m">';
               
               foreach($alle as $einzel)
               {
                   foreach($allem as $einzelm)
                   {
                       if($einzel[1]==$einzelm[0])
                       {
                        echo'<option selected="selected" value="'.$einzelm[0].'">' . $einzelm[1].'</option>';
                    	}
                   else
                   {
                       echo'<option value="'.$einzelm[0].'">' . $einzelm[1].'</option>';
                   }
                }
               }
                echo'</select></td>
                
        <td><input type="button" id="edit" name="edit" value="✍" onclick="verbe('.$einzel[4] .')"></td>
        
                </tr></table>';
            
                verbindungbe($handler);
    ?>
    
    </body>
</html>
</html>
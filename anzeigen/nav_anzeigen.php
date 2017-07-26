<html>
    <?php
    session_start();
    ?>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anzeigen.js" type="text/javascript"></script>
    <title>Anzeigen</title>
    <meta charset="UTF-8">
    </head>

<body>


    <!-----------------Navigation----------------------------------------------------------------------------------------------------------------------------------->
    <div id="navigation" style="list-style-type:none">
        <ul>
            <b>
                  <li class="navi"><b><input type="button" class ="navi" onclick="window.location.href='../anlegen/nav_anlegen.php'" value="Anlegen"></input></b></li>
                <li onclick="allemuenzen()"><a>Alle Münzen</a></li>
                <li onclick="muenzserien()"><a>Münzserien</a></li>
                <li onclick="material()"><a>Material</a></li>
                <li  onclick="laender()"><a>Länder</a></li>
                <li  onclick="gewicht()"><a>Gewicht</a></li>
        <li  onclick="ver()"><a>Münze-Ma.</a></li>

               <a id="suchea">
                   <input onclick="submitsuch()" id="suchbutton"type="button" value="⌕"></input><input type="text"  id="suchtext">
                </a>
                </b></li>
         </ul>
    </div>
    <!--------------Inhalt-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class="leer"></div>
    <div id="inhalt">
    </div>
</body>
</html>

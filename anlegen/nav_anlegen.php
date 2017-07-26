<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="../jquery.js" type="text/javascript"></script>
    <script src="ajax_anlegen.js" type="text/javascript"></script>
    <script src="../anzeigen/ajax_anzeigen.js" type="text/javascript"></script>
    <title>Anlegen</title>
    <meta charset="UTF-8">
    </head>

<body>



    <!-----------------Navigation----------------------------------------------------------------------------------------------------------------------------------->

    <div id="navigation" style="list-style-type:none">
        <ul>
            <b>
                  <li class="navi_anlegen"><b><input type="button" class ="navi" onclick="window.location.href='../anzeigen/nav_anzeigen.php'" value="Anzeigen"></input></b></li>
                <li onclick="allemuenzenan()"><a>Alle Münzen</a></li>
                <li onclick="muenzserienan()"><a>Münzserien</a></li>
                <li onclick="materialan()"><a>Material</a></li>
                <li  onclick="laenderan()"><a>Länder</a></li>
                <li  onclick="gewichtan()"><a>Gewicht</a></li>
                <li  onclick="ver()"><a>Münze-Ma.</a></li>
                    <a id="suchea"><input id="suchbutton"type="button" onclick="submitsuch()" value="⌕"></input><input type="text" id="suchtext"></a>
                </b></li>
         </ul>
    </div>
    <!--------------Inhalt-------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="leer"></div>
    <div id="inhalt">
    </div>
</body>
</html>

//----------------------------------------------------------------Funktionen zum Laden der einzelenn PHP Dateien-----------------------------------------------
function allemuenzenan()
{
    $.get("allemuenzenan.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function muenzserienan()
{
    $.get("muenzserienan.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function materialan()
{
    $.get("materialan.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function laenderan()
{
    $.get("laenderan.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function suchenan()
{
    $.get("suchean.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

  function gewichtan()
{
      $.get("gewichtan.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

  function ver()
{
      $.get("ver_m_ma.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}


//-----------------------------Funktionen zum Auselesen der Textboxen------------------------------------------------------------------------------------
function msan()
{
    var mst_ID = document.getElementById("ms").value;
    $.get("muenzserienan.php?ms="+mst_ID,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function maan()
{
    var mat_ID = document.getElementById("ma").value;
    $.get("materialan.php?ma="+mat_ID,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function laan()
{
    var lat_ID = document.getElementById("la").value;
    $.get("laenderan.php?la="+lat_ID,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function gean()
{
    var get_ID = document.getElementById("ge").value;
    $.get("gewichtan.php?ge="+get_ID,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function muan()
{
    var bzt = document.getElementById("bz").value;
    var mst_ID = document.getElementById("ms").value;
    var mat_ID = document.getElementById("ma").value;
    var wet = document.getElementById("we").value;
    var kdt = document.getElementById("kd").value;
    var prt = document.getElementById("pr").value;
    var get = document.getElementById("ge").value;
    var lat_ID = document.getElementById("la").value;
    
    $.get("allemuenzenan.php?bz="+bzt+"&ms="+mst_ID+"&ma="+mat_ID+"&we="+wet+"&kd="+kdt+"&pr="+prt+"&ge="+get+"&la="+lat_ID,function(data)
          {
        $("#inhalt").html(data);
        }
          )

}

function ver_m_ma()
{
    var m = document.getElementById("m").value;
    var ma = document.getElementById("ma").value;
    
    $.get("ver_m_ma.php?m="+m+"&ma="+ma,function(data)
          {
        $("#inhalt").html(data);
    }
          )
}


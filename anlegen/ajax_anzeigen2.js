//---------------------------------------------------------------------------Funktionen zum Laden--------------------------------------------------------

function allemuenzen()
{
    $.get("allemuenzen.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function muenzserien()
{
    $.get("muenzserien.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function material()
{
    $.get("material.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function laender()
{
    $.get("laender.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

function suchen()
{
    $.get("suche.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}

  function gewicht()
{
      $.get("gewicht.php",function(data)
          {
        $("#inhalt").html(data);
          }
         )
}


function muenzenbe()
{
    $.get("allemuenzenbe.php",function(data)
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


//-------------------------------------------------------------------------Funktion zum Beabreiten-----------------------------------------------
function mube(einzel)
{
    var $i=0;

    var bzt = document.getElementById("bz").value;
    var wet = document.getElementById("we").value;
    var kdt = document.getElementById("kd").value;
    var get = document.getElementById("ge").value;
    var lat_ID = document.getElementById("la").value;
    var mst_ID = document.getElementById("ms").value;
    var mat_ID = document.getElementById("ma").value;
    var prt = document.getElementById("pr").value;

    $.get("allemuenzenbe.php?bz="+bzt+"&ms="+mst_ID+"&ma="+mat_ID+"&we="+wet+"&kd="+kdt+"&pr="+prt+"&ge="+get+"&la="+lat_ID+"&submit="+einzel,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

    function gebe(einzel)
    {
    var ge = document.getElementById("ge").value;
    $.get("gewichtbe.php?ge="+ge+"&submit="+einzel,function(data)
         {
        $("inhalt").html(data);
    }
         )
    }


       function labe(einzel)
    {
    var la = document.getElementById("la").value;
    $.get("laenderbe.php?la="+la+"&submit="+einzel,function(data)
         {
        $("inhalt").html(data);
    }
         )
    }


function mabe(einzel)
{
    var ma = document.getElementById("ma").value;
    console.log(ma);
    $.get("materialbe.php?ma="+ma+"&submit="+einzel,function(data)
         {
        $("inhalt").html(data);
    }
         )
}

       function msbe(einzel)
{
    var ms = document.getElementById("ms").value;
    $.get("muenzserienbe.php?ms="+ms+"&submit="+einzel,function(data)
         {
        $("inhalt").html(data);
    }
         )
}

       function verbe(einzel)
{
    var m = document.getElementById("m").value;
    var ma = document.getElementById("ma").value;
    $.get("ver_m_mabe.php?m="+m+"&ma="+ma+"&submit="+einzel,function(data)
         {
        $("inhalt").html(data);
    }
         )
}

function erbe(einzel)
{
    var $i=0;

    var bzt = document.getElementById("bz").value;
    var wet = document.getElementById("we").value;
    var kdt = document.getElementById("kd").value;
    var get = document.getElementById("ge").value;
    var lat_ID = document.getElementById("la").value;
    var mst_ID = document.getElementById("ms").value;
    var mat_ID = document.getElementById("ma").value;
    var prt = document.getElementById("pr").value;

    $.get("../ergebnissebe.php?bz="+bzt+"&ms="+mst_ID+"&ma="+mat_ID+"&we="+wet+"&kd="+kdt+"&pr="+prt+"&ge="+get+"&la="+lat_ID+"&submit="+einzel,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

//-----------------------------------------------------------------------------------Funktion zum Übergeben der ID des zu bearbeitenden Datensatz------------
    //----------------------------------------------------------------------------------------Bearbeiten----------------------------------------------------


function submitbe(submit)
{
     $.get("allemuenzenbe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitbems(submit)
{
     $.get("muenzserienbe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitbema(submit)
{
     $.get("materialbe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitbela(submit)
{
     $.get("laenderbe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitbege(submit)
{
     $.get("gewichtbe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitver(submit)
{
     $.get("ver_m_mabe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submiter(submit)
{
     $.get("../ergebnissebe.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
}

function submitsuch()
{
    var suchtext = document.getElementById("suchtext").value;
        $.get("../ergebnisse.php?suchtext="+suchtext,function(data)
         {
        $("#inhalt").html(data);
    }
         )
}

//----------------------------------------------------------------------------------------------Löschen---------------------------------------------------

function submitlo(submit)
{
     $.get("allemuenzen.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}


function mslo(submit)
{
     $.get("muenzserien.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}


function malo(submit)
{
     $.get("material.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}



function lalo(submit)
{
     $.get("laender.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";

}


function gelo(submit)
{
     $.get("gewicht.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}

function ver_m_malo(submit)
{
     $.get("ver_m_ma.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}

function erlo(submit)
{
     $.get("../ergebnisse.php?submit="+submit,function(data)
          {
        $("#inhalt").html(data);
        }
          )
     return "löschen";
}

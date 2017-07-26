<?php
include("connection.php");
    function muenzenbe($handler)
    {
if(isset($_GET["bz"]))
{
//    if($_POST["bz"] AND $_POST["ms"] AND $_POST["ma"] AND $_POST["we"] AND $_POST["kd"] AND $_POST["pr"] AND $_POST["ge"] AND                      $_POST["la"]!= NULL)
  //      {
            $ma = $_GET["ma"];
            $la = $_GET["la"];
            $ms = $_GET["ms"];
            $ge = $_GET["ge"];
            $bz = $_GET["bz"];
            $pr = $_GET["pr"];
            $kd = $_GET["kd"];
            $we = $_GET["we"];
            $m_ID = $_GET["submit"];


            $smt = $handler->prepare("UPDATE muenzen SET bezeichnung=:bezeichnung,preis=:preis,datum=:datum,wert=:wert
            WHERE m_ID=:m_ID");

            $smt->bindParam(":bezeichnung",$bz);
            $smt->bindParam(":preis",$pr);
            $smt->bindParam(":datum",$kd);
            $smt->bindParam(":wert",$we);
            $smt->bindParam(":m_ID",$m_ID);

        $smt->execute();


    //    }
}
    }



function muenzserienbe($handler)
{
    if(isset($_GET["ms"]))
    {
        $ms = $_GET["ms"];
        $ms_ID = $_GET["submit"];

        $smt = $handler->prepare("UPDATE muenzserien SET muenzserie=:muenzserie WHERE ms_ID = :ms_ID");

        $smt->bindParam(":muenzserie",$ms);
        $smt->bindParam(":ms_ID",$ms_ID);

        $smt->execute();
    }
}


function materialbe($handler)
{
    if(isset($_GET["ma"]))
    {
        $ma = $_GET["ma"];
        $ma_ID = $_GET["submit"];

        $smt = $handler->prepare("UPDATE material SET material=:material WHERE ma_ID = :ma_ID");

        $smt->bindParam(":material",$ma);
        $smt->bindParam(":ma_ID",$ma_ID);

        $smt->execute();
    }
}

function laenderbe($handler)
{
    if(isset($_GET["la]"]))
    {
    $la = $_GET["la"];
    $la_ID = $_GET["submit"];

    $smt = $handler -> prepare("UPDATE laender SET land=:land WHERE l_ID = :la_ID");

    $smt->bindParam(":land",$la);
    $smt->bindParam(":la_ID",$la_ID);

    $smt->execute();
    }
}

function gewichtbe($handler)
{
    if(isset($_GET["ge"]))
    {
    $ge = $_GET["ge"];
    $ge_ID = $_GET["submit"];

    $smt = $handler -> prepare("UPDATE gewicht SET gewicht =:gewicht WHERE g_ID= :g_ID");

    $smt->bindParam(":gewicht",$ge);
    $smt->bindParam(":g_ID",$ge_ID);

    $smt->execute();
    }
}

function verbindungbe($handler)
{
    if(isset($_GET["ma"]))
    {
        $m = $_GET["m"];
        $ma = $_GET["ma"];
        $submit = $_GET["submit"];

        $smt = $handler -> prepare("UPDATE ver_ma SET ma_ID=:ma_ID, m_ID=:m_ID WHERE v_ma_id=:v_ma_id");

        $smt->bindParam(":ma_ID",$ma);
        $smt->bindParam(":m_ID",$m);
        $smt->bindParam(":v_ma_id",$submit);

        $smt->execute();
    }
}
//---------------------------------------------------------------------------alte Daten einlesen------------------------------------------------
function gewichtei($handler)
{
           $wert  = "SELECT * FROM gewicht";
               $smt = $handler->query($wert);
               $alle= $smt->fetchAll();
    return $alle;
}


function muenzserieei($handler)
{
           $muenzserie = "SELECT * FROM muenzserien";
               $smt = $handler->query($muenzserie);
               $resultms = $smt->fetchAll();
            return $resultms;
}


function materialei($handler)
{
    $material = "SELECT * FROM material";
               $smt = $handler->query($material);
               $resultma = $smt->fetchAll();
                return $resultma;
}


function landei($handler)
{
           $land  = "SELECT * FROM laender";
               $smt = $handler->query($land);
               $resultla= $smt->fetchAll();
    return $resultla;
}

//-----------------------------------------------------------------------------------Daten löschen---------------------------------------------------------

function muenzelo($handler)
{
    if(isset($_GET["submit"]))
    {
            $m_ID = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM muenzen WHERE m_ID =:m_ID");

            $smt->bindParam(":m_ID",$m_ID);
            $smt->execute();

         echo '<script type="text/JavaScript">
            $.get("allemuenzen.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
    }
}


function materiallo($handler)
{
      if(isset($_GET["submit"]))
    {
            $ma_ID = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM material WHERE ma_ID =:ma_ID");

            $smt->bindParam(":ma_ID",$ma_ID);
            $smt->execute();

           echo '<script type="text/JavaScript">
            $.get("material.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
      }
}


function laenderlo($handler)
{
      if(isset($_GET["submit"]))
    {
            $l_ID = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM laender WHERE l_ID =:l_ID");

            $smt->bindParam(":l_ID",$l_ID);
            $smt->execute();

           echo '<script type="text/JavaScript">
            $.get("laender.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
      }
}


function gewichtlo($handler)
{
      if(isset($_GET["submit"]))
    {
            $g_ID = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM gewicht WHERE g_ID =:g_ID");

            $smt->bindParam(":g_ID",$g_ID);
            $smt->execute();

           echo '<script type="text/JavaScript">
            $.get("gewicht.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
      }
}


function muenzserienlo($handler)
{
      if(isset($_GET["submit"]))
    {
            $ms_ID = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM muenzserien WHERE ms_ID =:ms_ID");

            $smt->bindParam(":ms_ID",$ms_ID);
            $smt->execute();

        echo '<script type="text/JavaScript">
            $.get("muenzserien.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
      }
}

function verbindunglo($handler)
{
      if(isset($_GET["submit"]))
    {
            $submit = $_GET["submit"];


            $smt = $handler->prepare("DELETE FROM ver_ma WHERE v_ma_id =:v_ma_id");

            $smt->bindParam(":v_ma_id",$submit);
            $smt->execute();

        echo '<script type="text/JavaScript">
            $.get("ver_m_ma.php",function(data)
                    {
                        $("#inhalt").html(data);
                    }
                )
            </script>';
      }
}
//------------------------------------------------------------------------------------Suchen-----------------------------------------------------------------

function suchen($handler)
{
    $such = $_GET["suchtext"];

    $query = 'SELECT m.bezeichnung, m.preis, m.datum, g.gewicht,g.g_ID,m.wert,ms.muenzserie,ms.ms_ID,ma.ma_ID,ma.material,la.land, la.l_ID, m.m_ID
                                FROM muenzserien AS ms
                                INNER JOIN muenzen AS m ON m.ms_ID = ms.ms_ID
                                INNER JOIN gewicht AS g ON m.g_ID = g.g_ID
                                INNER JOIN laender AS la ON la.l_ID = m.l_ID
                                INNER JOIN ver_ma AS vm ON vm.m_ID= m.m_ID
                                INNER JOIN material AS ma ON ma.ma_ID = vm.ma_ID
                                WHERE m.bezeichnung LIKE "%' . $such . '%" OR
                                m.preis LIKE "%' . $such.'%" OR
                                m.datum LIKE "%' . $such . '%" OR
                                g.gewicht LIKE "%' . $such . '%" OR
                                m.wert LIKE "%' . $such . '%" OR
                                ms.muenzserie LIKE "%' . $such . '%" OR
                                ma.material LIKE "%' . $such . '%" OR
                                la.land LIKE "%' . $such . '%"';
    $smt = $handler->query($query);
    $alle = $smt->fetchAll();

    return $alle;
}
?>

<?php
  function muenzenan($handler,$bz,$pr,$kd,$ms,$ge,$la,$we)
  {
    $smt = $handler->prepare("INSERT INTO muenzen(bezeichnung, preis, wert, datum, ms_id, g_ID, l_ID) VALUES(:bezeichnung, :preis, :wert,:datum, :muenzserie, :gewicht, :wert);");
    $smt->bindParam(":bezeichnung",$bz);
    $smt->bindParam(":preis",$pr);
    $smt->bindParam(":datum",$kd);
    $smt->bindParam(":muenzserie",$ms);
    $smt->bindParam(":gewicht",$ge);
    $smt->bindParam(":land",$la);
    $smt->bindParam(":wert",$we);
    $smt->execute();
  }

  function gewichtan($handler,$ge)
  {
    $smt = $handler->prepare("INSERT INTO gewicht(gewicht) VALUES(:gewicht)");
    $smt->bindParam(":gewicht",$ge);
    $smt->execute();
  }

  function laenderan($handler,$la)
  {
    $smt = $handler->prepare("INSERT INTO laender(land) VALUES(:land)");
    $smt->bindParam(":land",$la);
    $smt->execute();
  }

  function materialan($handler,$ma)
  {
    $smt = $handler->prepare("INSERT INTO material(material) VALUES(:material)");
    $smt->bindParam(":material",$ma);
    $smt->execute();
  }

  function muenzserienan($handler,$ms)
  {
    $smt = $handler->prepare("INSERT INTO muenzserien(muenzserie) VALUES(:muenzserien)");
    $smt->bindParam(":muenzserien",$ms);
    $smt->execute();
  }

  function ver_m_maan($handler,$m,$ma)
  {
    $smt = $handler->prepare("INSERT INTO ver_ma(m_ID,ma_ID) VALUES(:m_ID,:ma_ID)");
    $smt->bindParam(":m_ID",$m);
    $smt->bindParam(":ma_ID",$ma);
    $smt->execute();
  }

  function wertan($handler,$we)
  {
    $smt = $handler->prepare("INSERT INTO muenzserien(wert) VALUES(:wert)");
    $smt->bindParam(":wert",$we);
    $smt->execute();
  }
 ?>

<?PHP
include "barcode.class";

echo "<HTML>";

  $bc = new BarcodeI25();

  $bc->SetCode("A1M2009999");
  $bc->Generate();
echo "</HTML>";
?>
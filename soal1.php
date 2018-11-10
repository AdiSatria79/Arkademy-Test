<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Soal 1  function yang mempunyai return value berformat JSON</title>
  </head>
  <body>
    <h1>function yang mempunyai return value berformat JSON</h1>
    <?php
    function produk(){
    $soal = new stdClass();
    $soal = new stdClass();
    $soal->itemId = "12341822";
    $soal->itemName = "basic t-shirt";
    $soal->price = 70000;
    $availableColorAndSize = array(  "color = red", "size= S,M,L","color = solid black", "sizes= M, L");
    $soal->freeShiping =false;
    $myJSON = json_encode($soal);
    $myJSON2 = json_encode($availableColorAndSize);
    echo $myJSON;
    echo $myJSON2;
}
produk();
    ?>
  </body>
</html>

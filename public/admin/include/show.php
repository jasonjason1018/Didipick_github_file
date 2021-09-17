<?
$allWeb = $_SERVER["SERVER_NAME"];
$AdminData = substr($_SERVER["PHP_SELF"],1,5);
echo $allWeb.$AdminData;
?>
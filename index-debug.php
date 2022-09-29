<?php
define("LOCAL", "localhost");

$isLocal = $_SERVER['HTTP_HOST'];
echo "Constante LOCAL: " . LOCAL;
echo "<br>";
echo "HTTP_HOST: " . $_SERVER['HTTP_HOST'];
echo "<br>";
echo "Servidor: " . $isLocal;
echo "<br>";
var_dump($isLocal === LOCAL);
echo "<br>";

?>

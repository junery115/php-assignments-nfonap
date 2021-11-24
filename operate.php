<?php 

require "test.php";
$fnum; 
$snum;
$op; 
if( isset($_GET["submit"])){
    $fnum = $_GET["fnumber"];
    $snum = $_GET["snumber"];
    $op = $_GET["operator"];
    echo "this is the fnumber ". $fnum;
    echo "<br />";
    echo "this is the snumber ". $snum;
    echo "<br />";
    echo $fnum + $snum;
$sum = operaeOnNumebers((int)$fnum, (int)$snum, $operator );
echo $sum;
}
// $total = operateOnNumebers($f,3,"*");
// echo $total;
// print($fnu;);
?>
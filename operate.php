<?php 

require "operations.php";
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
$sum = operaeOnNumebers($fnum, $snum, $op );
echo $sum;
}
echo $total;
// print($fnu;);
?>
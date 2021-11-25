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
$sum = operateOnNumebers($fnum, $snum, $op );
echo $sum;
}
// print($fnu;);
?>
<?php   
/*
function operateOnNumebers($firstNum, $secondNum, $operator){
 
    $result = 0;
    if($operator !== "+" and $operator !== "-" and $operator !== "*" and $operator !== "/" and $operator !== "%" and $operator !== "**" ){
        $result =  "I don't know that operator choose either *, /, %, ** ,";
    }
        
    if($operator === "+") 
            $result =  $firstNum + $secondNum;

    if($operator === "-") 
            $result =  $firstNum - $secondNum;

    if($operator === "**") 
            $result =  $firstNum ** $secondNum;

    if($operator === "%"){
        if($secondNum != 0){ 
            $result =  $firstNum - $secondNum;
        }
    } 

    if($operator === "/") {
        $result = ($secondNum != 0) ? $secondNum : "Division by zero does not exist";
    }
    if($operator === "*") 
            $result =  $firstNum * $secondNum;

   return $result; 

}
?>
*/
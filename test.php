<?php
    //phpinfo();
    // Write a function that calculates the sum of an array range function 

    function sumArray($arr){
        $sum = 0;
        foreach($arr as $ar){
            $sum += $ar; 
        }
        return $sum;
    }

    $array = range(1, 10);
    $sum = sumArray($array);
   // print($sum);

/*
 Write a function that takes 2 numbers and an arithmetic operator carryout an operation based on the defined operator
and display the result 
*/

/*
function operateOnNumebers($firstNum, $secondNum, $operator){
 
    $result = 0;
    switch($operator) {
        case "+":
            $result =  $firstNum + $secondNum;
            break;
        case "-":
            $result =  $firstNum - $secondNum;
            break;
        case "/":
            $result =  $firstNum / $secondNum;
            break;
        case "%":
            $result =  $firstNum % $secondNum;
            break;
        case "*":
            $result =  $firstNum * $secondNum;
            break;
        case "**":
            $result =  $firstNum ** $secondNum;
            break;
        default:
            echo "I don't know that operator choose either *, /, %, ** ,"; 
    }
   return $result; 

}
$result = operateOnNumebers(2,4, "**");
print($result);
*/
// You can write the function without a return type so that the  it just displays the result at the end, or you can make it to 
// return something so that you can then display it or use it.
 /*
 Don't accept num2 = 0 when dividing
 No other char should be used that is not an operator
 */

 /*
  Arithmetic operation between two numbers
 @param 1: numerical number
 @param 2: numerical number
 @param 3: string operator

 @return: result of the operation
 */

function operateOnNumebers($firstNum, $secondNum, $operator){
 
    $result = 0;
    if($operator !== "+" and $operator !== "-" and $operator !== "*" and $operator !== "/" and $operator !== "%" and $operator !== "**" ){
        $result =  "I don't know that operator choose either *, /, %, ** ,";
    }
        
// Its best to the do the else if when we know that we can only have one possibility, like +, *, -, etc 
// we only use what i have here when we know that we can have different options to avoid performance issues
   // if operator is a plus sign , 
    if($operator === "+") 
    // add the nummber and store the result in $result
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
        //check to make sure that the number is not zero
        //   if($secondNum != 0){
            // $result =  $firstNum / $secondNum;
        //   } else {
            //   $result = "Division by zero does not exist";
        //   }
        $result = ($secondNum != 0) ? $secondNum : "Division by zero does not exist";
    }
    if($operator === "*") 
            $result =  $firstNum * $secondNum;

   return $result; 
// Find the greatest common divisor in any given array
// a function that takes in an array of numbers and sort them in increasing order

}

// $sum = operateOnNumebers(2, 3, "/" );
?>


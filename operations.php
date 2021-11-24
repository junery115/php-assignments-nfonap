<?php   

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
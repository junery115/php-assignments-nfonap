<?php

function maxNumbers($nums){
    $max  = 0;

    foreach($nums as $num){
        if($num >= $max){
            $max = $num;
        }
    }
    return $max;
}

$nums = array(20, 5, 3, 8, 12, 19, 15);

$maxNum = maxNumbers($nums);
echo $maxNum;
echo '<br />';


function oddAndEven($nums){
    $even = 0;
    $odd = 0;

    foreach($nums as $num ){
        if($num % 2 == 0){
            $even++;
        }else {
            $odd++;
        }
    }
    print("There are $even even numbers and $odd odd numbers");
}

oddAndEven($nums);


echo '<br />';

function removeDuplicates($words){

    $words = str_split($words);

    $newWord = array();
    foreach($words as $word){
        if(!in_array($word, $newWord)){
             array_push($newWord, $word);
        }
    }
    return $newWord;
}
$find  = removeDuplicates("caaabbbcccccctttt");
    foreach($find as $nw){
        echo $nw;
    }
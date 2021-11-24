<?php

    // phpinfo();
    /*
    $var  = 0;
    for($var = 0; $var <= 5; $var++){

        print($var);
        echo "<br />";
    }
    */
      echo "<form method='get' action='handle.php' />";
      echo "<input type='text' name='fname' hint='name'/> " ;
      echo"<input type='button' value ='sumbit'name='submit'/>";
        echo "</form>";
        
   
        $cost =  '$10.25';
        print("A pen cost: $cost");
          print('<br \>');
        
        $arr = array();
        $arr[0] = 'black';
        $arr[1] = 'purple';
        $arr[2] = 'white';
        $arr[] = 'Green';
        $arr[] = 'Blue';
        $arr[] = 'yellow';
         
        foreach($arr as $ar){

          print($ar);
          print('<br \>');
        }
        
        for($ar= 0; $ar < 7; $ar++){

          print("The index is $ar" . " ". $arr[$ar]);
          print('<br \>');
        }

        $arraa = [
          'green' => 'Pear',
          'yellow' => 'Banana',
          'orange' => 'oranges'
        ];
        print_r($arraa);
$nums = [1, 2, 3];
        list($green, $yellow, $orange) = $nums;
        print("Green is $green");

        $oddNums = range(1, 20, 2);
        
        foreach($oddNums as $num){

          print($num);
          print('<br \>');
        }

          print('<br \>');
        $evenNumbs = range(2, 20, 2);
        foreach($evenNumbs as $num){

          print($num);
          print('<br \>');
        }

function evenNums($arise){
  $evenArr = array();
  foreach($arise as $num){
    if($num % 2 == 0){
      $evenArr[] = $num;
    }
  }
  return $evenArr;
}

print("Array here");
$arr = range(1,10);
print_r(evenNums($arr));
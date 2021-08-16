<?php
class basicmath
{
  public static function badd($a, $b)
  {
    $c = intval($a) + intval($b);
    return $c;
  }

  public static function palindrome($number){
    $temp = $number;
    $new = 0;
    while(floor($temp)){
      $a = $temp%10;
      $new = $new * 10 + $a;
      $temp = $temp/10;
    }
    if($new == $number){
      return 1;
    }
    else{
      return 0;
    }
    //call function(number)    
  }
}
?>

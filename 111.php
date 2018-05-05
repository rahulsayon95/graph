<?php

   
  $s = 'rahul';
$temp = '';
$i = 0;
for ( $length = mb_strlen($s); $i < $length; $i++) {
    $temp .= $s{$length - $i - 1};
}
  
 // echo $temp;
  
   echo $s[$length - $i - 1];






?>
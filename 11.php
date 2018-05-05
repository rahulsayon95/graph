<?php

$string  = 'aabbbccddd';
 $letters = str_split($string);
$result  = array_fill_keys($letters, 1);
$previous = '';

foreach($letters as $letter) {
    if($letter == $previous) {
        $result[$letter]++;
    }
    $previous = $letter;
}
arsort($result);
print_r($result);


?>
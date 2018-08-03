<?php 
header('Content-Type: text/html; charset=utf-8');
function revers_string($string) {

    /* Calculates string lenght */
    $str_len = strlen($string);
    
    /* Loop from the end of string lenght until 0 and displays one elemnet at the time */
    for ($i=($str_len-1); $i>=0; $i--){
        echo  $string[$i];
    }
}


$test_strings = ["Abcdefghijk", "Abcdefghijkl", "Abcdefghijkl\n", "", "Abcd\nefgh\rijkl\tmnop",
    "Zażółć gęślą jaźń", "Quick brown fox\0 jumped over the lazy do", "读万卷书不如行万里路"];


foreach ($test_strings as $test_string){
    echo revers_string($test_string);
    echo'<br>';
}


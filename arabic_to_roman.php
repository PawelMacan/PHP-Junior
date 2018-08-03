<?php 

function arabic_to_roman($number){

    if ($number < 0 || $number > 4000 || !is_int($number)) {
        return "Out of parameters range";
    }
    
    $roman_ones = array(1=> "I", 2=>"II", 3=>"III", 4=>"IV", 5=>"V", 6=>"VI", 7=>"VII", 8=>"VIII",
        9=>"IX"); 
    $roman_tens = array(1=> "X", 2=>"XX", 3=>"XXX", 4=>"XL", 5=>"L", 6=>"LX", 7=>"LXX",
        8=>"LXXX", 9=>"XC");
    $romans_hundreds = array(1=> "C", 2=>"CC", 3=>"CCC", 4=>"CD", 5=>"D", 6=>"DC", 7=>"DCC",
        8=>"DCCC", 9=>"CM"); 
    $romans_thousands = array(1=> "M", 2=>"MM", 3=>"MMM", 4=>"MMMM", 5=>"MMMMM", 6=>"MMMMMM",
        7=>"MMMMMMM", 8=>"MMMMMMMM", 9=>"MMMMMMMMM"); 
    
    $one = $number % 10;
    $ten = ($number - $one) % 100;
    $hundred = ($number - $ten - $one) %1000;
    $thousand = ($number - $hundred - $ten - $one) % 10000;
    
    $ten = $ten / 10;
    $hundred = $hundred / 100;
    $thousand = $thousand / 1000;
    $result = NULL;
    
    if ($thousand) { $result .=$romans_thousands[$thousand];}
    if ($hundred){$result .= $romans_hundreds[$hundred];}
    if ($ten) {$result .= $roman_tens[$ten]; }
    if ($one) {$result .= $roman_ones[$one]; }
    
    return $result;
    
}


$check_list = [1025, 1999, 2000, 2001, 444, 0, -9, 65536, 36.6,  "qwerty"];

foreach ($check_list as $check_element){
    echo arabic_to_roman($check_element);
    echo'<br>';
}



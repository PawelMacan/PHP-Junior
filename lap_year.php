<?php

function lap_year($param) {
    
    /* Not sure about years BC.
    If the are not acountable we shoul add
    || ($param < 0) to if statment */
    
    if (!is_int($param) ){
        return "Year should be a number";
        
    } elseif ($param % 4 == 0 && $param % 100 != 0 || $param % 400 == 0) {  /* Calculations according guidelines*/
        return "Year $param is lap year";
    } else {
        return "Year $param is not lap year";
    }
}


$check_list = [2016, 2015, 2000, 1604, 1603, 1600, 0, -4, -100, -400, -401, "ABCDE", "", null];

foreach ($check_list as $check_element){
    echo lap_year($check_element);
    echo'<br>';
}
    


    
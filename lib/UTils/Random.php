<?php

function random_number($arr = array()){
return rand(0, count($arr) - 1);
}

function getColor($price){
    if($price>20){
        return "red";
    }else if($price>10){
        return "green";
    }else{
        return "blue";
    }
}

<?php


Class ArrayTool{

    public static function getMax($array) {
        $max = $array[0];
        foreach($array as $value){
            if($value >= $max){
                $max = $value;
            }
        }
        return $max;
    }

    public static function getMin($array){
        $min = $array[0];
        foreach($array as $value){
            if($value < $min){
                $min = $value;
            }
        }
        return $min;
    }
}
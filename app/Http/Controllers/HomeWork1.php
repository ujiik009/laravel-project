<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWork1 extends Controller
{
    private $array_info = [
        "name" => "apirat",
        "surname" => "pramchana",
        "brithday"=> "24/11/1994",
        "age" => null
        
    ];

    function getInfomation($info){
        $info_arr = $this->array_info;
        $info_arr['age'] = $this->calAge($info_arr['brithday']);
        return $info_arr[$info];
    }

    function calAge ($brithday){
    	$brith = explode("/", $brithday);
    	$Ybrith = end($brith);
    	$now = date('Y');
    	$age = $now-$Ybrith;
    	return $age;
    }
  	
}

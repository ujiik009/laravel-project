<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{	


   function getYear(){
   	 $bYear = 1996;

   	 return $bYear+ 543;
   }
   function getName($userid){
   	 $customers = $this->getCustomers();

   	 return $customers[$userid-1];
   }
   function getCustomers(){
       $Customers =[
           ['name' => 'apirat','surname'=>'pramchana'],
           ['name' => 'ice','surname'=>'liux'],
           ['name' => 'vue','surname'=>'js']
       ];
       return $Customers;
   }
}

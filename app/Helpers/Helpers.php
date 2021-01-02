<?php

use App\User;
use Carbon\Carbon;

if(!function_exists('getFromUser')){
    
     function getFromUser(int $id) : Object
    {
        return User::where('id',$id)->first();
    }

}

if(!function_exists('getDayFormat')){
    
    function getDayFormat(Carbon $dateTime)
   {
        return Carbon::parse($dateTime)->format('yy-m-d');
   }

}

if(!function_exists('getTimeFormat')){
    
    function getTimeFormat(Carbon $dateTime)
   {
        return Carbon::parse($dateTime)->format('H:i');
   }

}

?>

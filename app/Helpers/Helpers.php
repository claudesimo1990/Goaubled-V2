<?php

use app\user;

if(!function_exists('getFromUser')){
    
     function getFromUser(int $id) : Object
    {
        return User::where('id',$id)->first();
    }

}

?>

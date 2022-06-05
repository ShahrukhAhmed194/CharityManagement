<?php
namespace App\Http\Traits;

trait validation{
    public function validateNumber($phone){
        $length = strlen($phone);
        $first_two_digits = substr($phone,0,2);
        $first_three_digits = substr($phone,0,3);
        $second_two_digits = substr($phone,3,2);
        $second_three_digits = substr($phone,3,3);


        if($length == 11 && $first_three_digits != "012" ){
            if(is_numeric($phone) && $first_two_digits=="01"){
                return $phone;
            }  
            else{
                return  "string.";
            }
                   
        }
        elseif($length == 14 && $second_three_digits != "012"){
            if(is_numeric($phone) && $second_two_digits == "01"){
                if($first_three_digits == "+88"){
                    return $phone;
                }
                else{
                    return  "string.";
                }
               
            }
            else{
                return  "string.";
            }
        }
        else{
            return  "string.";
        }

        
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
}
/*
Recurtion example with multidimentional array
    $student[] = array('id'=>101,'name'=>'Rabbee');
    $student[] = array('id'=>102,'name'=>'Sharif');
    $student[] = array('id'=>103,'name'=>'Sadat');
    $student[] = array('id'=>104,'name'=>'Adiba');

    function find($result, $data) {
        if (!is_array($result)) {
            if($data == $result){
                echo $data,' Found';
            }
            return;
        }

        foreach($result as $v) {
            find($v,$data);
        }
    }

    //Function call
    find($student,'Adiba');
*/

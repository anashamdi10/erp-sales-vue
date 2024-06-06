<?php

use Illuminate\Support\Facades\Config;

function uploadImage($folder , $imag){
    $extention = strtolower($imag->extention());
    $filename = time().rand(100 ,999).'.'.$extention;
    $imag->getClientOrignalName = $filename;
    $imag->move($folder , $filename);
}
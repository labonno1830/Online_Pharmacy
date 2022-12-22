<?php

use App\Models\category;

function cat(){
    $cat = category::all();
    return $cat;
}
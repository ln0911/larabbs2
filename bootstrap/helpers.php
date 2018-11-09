<?php
/**
 * Created by PhpStorm.
 * User: lining
 * Date: 2018/11/9
 * Time: 9:18 AM
 */
function route_class(){

    return str_replace('.','_',\Illuminate\Support\Facades\Route::currentRouteName());
}
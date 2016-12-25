<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24.12.16
 * Time: 16:09
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

function truncateBlogText($str){
    if(strlen($str) > 610)
        echo substr($str, 0, 610).'...';
    else
        echo $str;
}

function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
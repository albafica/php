<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of load
 *
 * @author albafica.wang
 */
class load {

    public static function loadClass($class_name) {
        $filename = $class_name . ".class.php";
        if (is_file($filename)) {
            return include_once $filename;
        }
    }

}

spl_autoload_register(array('load', 'loadClass'));
$a = new test(); //实现自动加载，很多框架就用这种方法自动加载类 

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of load2
 *
 * @author albafica.wang
 */

namespace Foo;

class load2 {

    public static function loadClass($class_name) {
        var_dump($class_name);
        $file = dirname(__FILE__) . '/' . $class_name . '.class.php';
        $file = str_replace(__NAMESPACE__ . '\\', '', $file);
        if (file_exists($file)) {
            require_once($file);
        }
    }

}

spl_autoload_register(array(__NAMESPACE__ . '\load2', 'loadClass'));
$t = new \Foo\test2();

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
set_error_handler('assignError');
trigger_error('这是一个自定义错误1,默认为notice');
//
trigger_error('这是一个自定义错误3，notice', E_USER_NOTICE);
trigger_error('这是一个自定义错误4，warning', E_USER_WARNING);
trigger_error('这是一个自定义错误2，error', E_USER_ERROR);

function assignError($errno, $errstr, $errfile, $errline) {
    var_dump($errno);
    var_dump($errstr);
    var_dump($errfile);
    var_dump($errline);
//    //get the error string
//    $error_message = $errstr;
//    //if in debug mode, add line number and file info
//    $error_message .= "<br>" . basename($errfile) . ",line: " . $errline;
//
//    switch ($errno) {
//        //if the error was fatal, then add the error
//        //display an error page and exit
//        case ErrorHandler::FATAL():
//            $this->setType('Fatal');
//            $this->addError($error_message);
//            Display::errorPage($this->errorMessages());
//            exit(1);
//            break;
//        //if it was an error message, add a message of
//        //type error
//        case ErrorHandler::ERROR():
//            $this->setType('Error');
//            $this->addError($error_message);
//            break;
//        //if it was a warning, add a message of type
//        //warning
//        case ErrorHandler::WARNING():
//            $this->setType('Warning');
//            $this->addError($error_message);
//            break;
//        //if it was some other code then display all
//        //the error messages that were added
//        default:
//            Display::errorRows($this->errorMessages());
//            break;
//    }
//    //return a value so that the script will continue
//    //execution
//    return 1;
}

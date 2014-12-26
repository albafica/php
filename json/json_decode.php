<?php

$str = '[{"lastmsgid":0,"objectid":0,"objecttype":9,"getnewmsg":1,"firstmsgid":0}]';
var_dump(json_decode($str, true));
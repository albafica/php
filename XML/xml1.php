<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$postStr = '<xml><ToUserName><![CDATA[gh_046a27a39a8c]]></ToUserName>
<FromUserName><![CDATA[ofUvfjiYQqc1TbBbGQYZyGxtMEus]]></FromUserName>
<CreateTime>1425537113</CreateTime>
<MsgType><![CDATA[voice]]></MsgType>
<MediaId><![CDATA[cjM3sncB-ljNg_fwfsBdc-4qiIfhFCB2KCOgRlyXz2bTXxd7umVOOxIwjQ4_VhlK]]></MediaId>
<Format><![CDATA[amr]]></Format>
<MsgId>6122635279772527503</MsgId>
<Recognition><![CDATA[]]></Recognition>
</xml>';
$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
$msgType = strtolower(trim($postObj->MsgType));
var_dump($postObj);
var_dump($msgType);

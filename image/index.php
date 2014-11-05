<?php

include 'Image.class.php';
try {
    $image = new Image('1.gif');
    $image->text('天下无双', 'msyh.ttf', 26);
    $image->save('text1.gif');
} catch (Exception $e) {
    echo $e->getMessage();
}


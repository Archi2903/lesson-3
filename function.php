<?php

//$first = $_GET['first'];
//$second = $_GET['second'];
//function math($first, $second)
//
//{
//    if ($_GET['math'] == 'plus') {
//        echo $first + $second;
//    } else {
//        echo($first - $second);
//    }
//    return math();
//}
//var_dump($first);

$imgs = [
    1 => 'i12.png',
    2 => 'i16.png',
    3 => 'i19.png',
    4 => 'i25.png'
];//Никак не могу понять,все работает,кроме как(не получается привязать адрес картинки к массиву)

//var_dump($imgs);
//var_dump($_GET['id']);

function get_image($imgs) {
    if (!empty($_GET['id']) && $_GET['id'] < count($imgs) && $_GET['id'] > 0) {
        return $imgs[$_GET['id']];
    } else {
        return $imgs[0];
    }
}
//var_dump(get_image($imgs));
//var_dump($images);
//echo $images;
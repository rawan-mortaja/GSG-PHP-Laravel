<?php
function longString($arr , &$index){
    $long = '';
    $index = -1 ;
    foreach($arr as $k => $v){
        if(strlen($v) > strlen($long)){
            $long = $v;
            $index = $k ;
        }
    }
    return $long;
}
$str = array("Rawan", "Yousef", "Mohammed", "Reham");
$index = -1 ;
$res = longString($str , $index);

echo "String : " . $res ."<br>";
echo "index : " . $index ."<br>";

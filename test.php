<?php

$str = "トロンボーン";
$arr = preg_split("//u",$str,-1,PREG_SPLIT_NO_EMPTY);
$arr = array_reverse($arr);

print_r($arr);

?>
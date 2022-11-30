<?php
function add_item($arr, $item){
    return $arr[count($arr)-1] =  $item;
}
$arrr = array(1, 2, 3);
print_r( add_item($arrr, 6));
?>
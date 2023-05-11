<?php

function smallNumber(){
    return [1,2,3];
}
[$one, $two, $three] = smallNumber();

list($one, $two, $three) = smallNumber();

?>
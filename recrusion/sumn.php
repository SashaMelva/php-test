<?php
function sumn(int $n){
    return $n == 0? $n + 0: $n + sumn($n-1);
}
assert(sumn(0) == 0);
assert(sumn(2) == 3);
assert(sumn(3) == 6);
assert(sumn(6) == 21);
?>
<?php
function cekNar($f)
{
    if ($f == 0)
        return 0;
 
    $l = 1 + jum($f / 10);
    $d = $f;
    $s = 0;
    while ($d)
    {
        $s += pow($d % 10, $l);
        $d = (int)$d / 10;
    }
 
    return ($f == $sum);
}
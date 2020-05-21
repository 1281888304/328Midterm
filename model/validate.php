<?php
function validName($name)
{
$name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name);
}

function validBox($box)
{
    $boxs=array("nice for it","like midterm");
    return in_array($box,$boxs);
}
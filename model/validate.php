<?php
function validName($name)
{
$name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name);
}


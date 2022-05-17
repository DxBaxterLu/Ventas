<?php
function base_url()
{
    return base_url;
}

function dep($data)
{
    $format = printf('<prep>');
    $format .= printf($data);
    $format .= printf('</prep>');
    return $format;
}

/*function strClean($strCadena)
{

}*/

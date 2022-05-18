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

function getModal(string $nameModal, $data)
{
    $view_modal = "Views/Templates/Modals/{$nameModal}.php";
    require_once $view_modal;
}

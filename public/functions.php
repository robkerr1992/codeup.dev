<?php
function inputHas($key)
{
    return isset($_REQUEST[$key]) ? true : false;

}

function inputGet($key, $default = null)
{

    return inputHas($key) ? $_REQUEST[$key] : $default;


}

function escape($key)
{
    htmlspecialchars(strip_tags($key));
    return $key;

}

function clearSession()
{
    session_unset();
    session_regenerate_id(true);

}
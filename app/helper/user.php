<?php

function session($key, $value = null)
{
    if (!is_null($value)) {

        $_SESSION[$key] = $value;
    }

    if (isset($_SESSION[$key])) {

        return $_SESSION[$key];
    }
}




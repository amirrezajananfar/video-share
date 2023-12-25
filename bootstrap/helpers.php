<?php

function makeNumberPersian($number)
{
    return str_replace(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], $number);
}

function separatedUri()
{
    return explode('/', $_SERVER['REQUEST_URI']);
}

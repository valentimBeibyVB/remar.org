<?php


function asset($path) {
    return rtrim(BASE_URL, '/') . '/public/' . $path;
}

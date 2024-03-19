<?php
function filedate(string $filename) : string
{
    date_default_timezone_set('Europe/Kiev');
    $date = date('_Y_m_d_H_i_');

    $info = pathinfo($filename);
    $name = $info['filename']; // Ім'я файлу без розширення
    $extension = $info['extension']; // Розширення файлу

    return $name.$date.'.'.$extension;
}

function filedates(string $filename, string $namefile) : string
{
    date_default_timezone_set('Europe/Kiev');
    $date = date('_Y_m_d_H_i_');

    $info = pathinfo($filename);
    //$name = $info['filename']; // Ім'я файлу без розширення
    $extension = $info['extension']; // Розширення файлу

    return $namefile.$date.'.'.$extension;
}
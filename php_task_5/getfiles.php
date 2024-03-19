<?php
    function getfiles(string $dir) : array|false
    {
        $path = getcwd().DIRECTORY_SEPARATOR.$dir;
        $arr = scandir($path);
        return array_diff($arr, array('.', '..'));
    }
?>
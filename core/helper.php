<?php

if (!function_exists('load_trait')) {
    /**
     * 格式化打印输出 并终止程序
     * @param string    $class trait库
     * @param string    $ext 类库后缀
     * @return boolean
     * 
    */
    function p($data='')
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}
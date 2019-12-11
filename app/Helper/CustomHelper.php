<?php

namespace App\Helper;

class CustomHelper
{
    public static function datalog($content){
        $filename = storage_path() . '\\datalogs\\datalogs.log';
        
        if ($handle = fopen($filename, 'a')) {
            if (fwrite($handle, $content . " \n") === FALSE) {
                return FALSE;
            }
            fclose($handle);
            return TRUE;
        }

        return FALSE;
    }
}

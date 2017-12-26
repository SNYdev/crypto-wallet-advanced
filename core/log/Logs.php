<?php

namespace CryptoWalletAdvancedLogs;

class Logs
{
    static function accessLog($access, $isActive)
    {
        if (isActivgite){
            $openFile = fopen(str_replace("Logs.php", "", __FILE__)."access.log", "a");
            fwrite($openFile, __FILE__." : ".$access);
            fclose($openFile);
        } else {
            var_dump("Access log is not active");
        }
    }

    static function errorLog($error)
    {
        try{
            $error;
        } catch (\Exception $oException){
            $openFile = fopen("error.log","r+");
            fwrite($openFile, " : ". $oException->getMessage());
            fwrite($openFile, " : ". $oException->getCode());
            fwrite($openFile, " : ". $oException->getLine());
            fwrite($openFile, " : ". $oException->getTrace());
            fclose($openFile);
        }
    }
}
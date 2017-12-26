<?php

require __DIR__."/../vendor/autoload.php";

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced as CwaGeneralConf;
use CryptoWalletAdvancedRepoDatabase as CwaDatabaseQueries;
use CryptoWalletAdvancedRepoApi\apiRepository as CwaApiRequests;
use CryptoWalletAdvancedLogs\Logs as Logs;

$cryptoWalletGeneralSetting = new CwaGeneralConf();
$cryptoWalletGeneralDatabase = new CwaDatabaseQueries\dbRepository();
$cryptoWalletGeneralApi = new CwaApiRequests();

Logs::accessLog("test", true);
var_dump($cryptoWalletGeneralApi->getCryptoByPrice("ETH"));
//$cryptoWalletGeneralApi->getCryptoByPrice();
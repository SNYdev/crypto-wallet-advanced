<?php

require __DIR__."/../vendor/autoload.php";

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced as CwaGeneralConf;
use CryptoWalletAdvancedRepoDatabase as CwaDatabaseQueries;
use CryptoWalletAdvancedRepoApi\apiRepository as CwaApiRequests;

$cryptoWalletGeneralSetting = new CwaGeneralConf();
$cryptoWalletGeneralDatabase = new CwaDatabaseQueries\dbRepository();
$cryptoWalletGeneralApi = new CwaApiRequests();
var_dump($cryptoWalletGeneralApi->getEthByPrice());
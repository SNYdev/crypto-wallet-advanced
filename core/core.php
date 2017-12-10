<?php

require __DIR__."/../vendor/autoload.php";

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced as CwaGeneralConf;
use CryptoWalletAdvancedRepoDatabase as CwaDatabaseQueries;

$cryptoWalletGeneralSetting = new CwaGeneralConf();
$cryptoWalletGeneralDatabase = new CwaDatabaseQueries\dbRepository();
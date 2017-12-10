<?php
namespace CryptoWalletAdvancedRepoDatabase;

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced;

class dbRepository extends GeneralCryptoWalletAdvanced
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getByName(){
        $resp = $this->dbObject->query("SELECT * FROM testtable")->fetch();
        var_dump($resp);
    }
}
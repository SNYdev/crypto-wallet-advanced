<?php

namespace CryptoWalletAdvancedRepoApi;

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced;

class apiRepository extends GeneralCryptoWalletAdvanced
{
    private $numberOfCrypto;
    private $cryptoName;
    private $cryptoValue;
    private $valuePerPeriod;
    private $valueAfterSell;
    private $valueToSellPourcent;
    private $valueToSellBTC;
    private $valueToComplete;
    private $endPointApi;

    function __construct()
    {
        parent::__construct();
        $this->endPointApi = $this->apiObject;
    }

    private function getRequestUri($uri)
    {   try{
            return json_decode(file_get_contents($uri));
        } catch (\Exception $oException){

        }
    }

    public function getCryptoByPrice($crypto){
        $sReq = $this->endPointApi."data/price?fsym=".$crypto."&tsyms=BTC,USD,EUR";

        $oExecuteReq = $this->getRequestUri($sReq);
        return $oExecuteReq;
    }

    public function getCryptoByName(){
    }

}
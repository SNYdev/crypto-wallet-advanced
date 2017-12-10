<?php

namespace CryptoWalletAdvancedRepoApi;

use CryptoWalletAdvanced\GeneralCryptoWalletAdvanced;

class apiRepository extends GeneralCryptoWalletAdvanced
{
    private $endPointApi;

    function __construct()
    {
        parent::__construct();
        $this->endPointApi = $this->apiObject;
    }

    public function getEthByPrice(){
        return json_decode(file_get_contents($this->endPointApi."data/price?fsym=ETH&tsyms=BTC,USD,EUR"));
    }
}
<?php
namespace CryptoWalletAdvanced;

use \PDO;

class GeneralCryptoWalletAdvanced
{
    private $confFile;
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPassword;
    protected $dbObject;
    protected $apiObject;

    public function __construct()
    {
        $this->confFile = parse_ini_file($this->getConfFile(false));
        $this->dbHost = $this->confFile['database']['dbhost'];
        $this->dbName = $this->confFile['database']['dbname'];
        $this->dbUser= $this->confFile['database']['dbuser'];
        $this->dbPassword = $this->confFile['database']['dbpassword'];

        $this->dbObject = $this->getDbConnexion($this->dbHost, $this->dbName, $this->dbUser, $this->dbPassword);
        $this->apiObject = "https://min-api.cryptocompare.com/";
    }

    private function getConfFile($isEcho)
    {
        if ($isEcho){
            echo "conf/conf.ini";
        } else {
            return "conf/conf.ini";
        }
    }

    private function getDbConnexion($host, $name, $user, $pass)
    {
        try{

            return new PDO('mysql:host='.$host.';dbname='.$name, $user, $pass);

        } catch (\PDOException $oException){
            return __FILE__." : Connexion not working ". $oException->getMessage();
        }
    }

    private function getApiConnexion()
    {

    }

}
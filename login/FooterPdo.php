<?php

namespace fodinhome;

use Database;
use PDO;
use PDOException;

require_once 'dbconfig.php';
class FooterPdo
{

    private $kapcsolodik;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->kapcsolodik = $db;
    }

    public function runQuery($adatbazis)
    {
        $banner = $this->kapcsolodik->prepare($adatbazis);
        return $banner;
    }

    public function adatbazisBeszurMagyar($footer_id, $egy_szakasz_egy, $egy_szakasz_ketto, $egy_szakasz_harom, $egy_szakasz_negy, $egy_szakasz_link_egy, $egy_szakasz_link_ketto, $egy_szakasz_link_harom, $ketto_szakasz_egy, $ketto_szakasz_ketto, $ketto_szakasz_harom, $ketto_szakasz_negy, $ketto_szakasz_link_egy, $ketto_szakasz_link_ketto, $ketto_szakasz_link_harom, $harom_szakasz_egy, $harom_szakasz_ketto, $harom_szakasz_harom, $harom_szakasz_negy, $harom_szakasz_link_egy, $harom_szakasz_link_ketto, $harom_szakasz_link_harom, $negy_szakasz_egy, $negy_szakasz_ketto, $negy_szakasz_harom, $negy_szakasz_negy, $negy_szakasz_link_egy, $negy_szakasz_link_ketto, $negy_szakasz_link_harom, $ot_szakasz_egy, $ot_szakasz_ketto, $ot_szakasz_harom, $ot_szakasz_negy, $ot_szakasz_link_egy, $ot_szakasz_link_ketto, $ot_szakasz_link_harom)
    {

        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO  footer  (footer_id,egy_szakasz_egy,egy_szakasz_ketto,egy_szakasz_harom,egy_szakasz_negy,egy_szakasz_link_egy,egy_szakasz_link_ketto,egy_szakasz_link_harom,ketto_szakasz_egy,ketto_szakasz_ketto,ketto_szakasz_harom,ketto_szakasz_negy,ketto_szakasz_link_egy,ketto_szakasz_link_ketto,ketto_szakasz_link_harom,harom_szakasz_egy,harom_szakasz_ketto,harom_szakasz_harom,harom_szakasz_negy,harom_szakasz_link_egy,harom_szakasz_link_ketto,harom_szakasz_link_harom,negy_szakasz_egy,negy_szakasz_ketto,negy_szakasz_harom,negy_szakasz_negy,negy_szakasz_link_egy,negy_szakasz_link_ketto,negy_szakasz_link_harom,ot_szakasz_egy,ot_szakasz_ketto,ot_szakasz_harom,ot_szakasz_negy,ot_szakasz_link_egy,ot_szakasz_link_ketto,ot_szakasz_link_harom) 
                  VALUE (:footer_id, :egy_szakasz_egy, :egy_szakasz_ketto, :egy_szakasz_harom, :egy_szakasz_negy, :egy_szakasz_link_egy, :egy_szakasz_link_ketto, :egy_szakasz_link_harom, :ketto_szakasz_egy, :ketto_szakasz_ketto, :ketto_szakasz_harom, :ketto_szakasz_negy, :ketto_szakasz_link_egy, :ketto_szakasz_link_ketto, :ketto_szakasz_link_harom, :harom_szakasz_egy, :harom_szakasz_ketto, :harom_szakasz_harom, :harom_szakasz_negy, :harom_szakasz_link_egy, :harom_szakasz_link_ketto, :harom_szakasz_link_harom, :negy_szakasz_egy, :negy_szakasz_ketto, :negy_szakasz_harom,:negy_szakasz_negy,:negy_szakasz_link_egy,:negy_szakasz_link_ketto, :negy_szakasz_link_harom, :ot_szakasz_egy, :ot_szakasz_ketto, :ot_szakasz_harom, :ot_szakasz_negy, :ot_szakasz_link_egy, :ot_szakasz_link_ketto, :ot_szakasz_link_harom)");
            $banner->bindParam(":footer_id", $footer_id, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_egy", $egy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_ketto", $egy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_harom", $egy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_negy", $egy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_egy", $egy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_ketto", $egy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_harom", $egy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_egy", $ketto_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_ketto", $ketto_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_harom", $ketto_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_negy", $ketto_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_egy", $ketto_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_ketto", $ketto_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_harom", $ketto_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_egy", $harom_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_ketto", $harom_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_harom", $harom_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_negy", $harom_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_egy", $harom_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_ketto", $harom_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_harom", $harom_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_egy", $negy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_ketto", $negy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_harom", $negy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_negy", $negy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_egy", $negy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_ketto", $negy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_harom", $negy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_egy", $ot_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_ketto", $ot_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_harom", $ot_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_negy", $ot_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_egy", $ot_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_ketto", $ot_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_harom", $ot_szakasz_link_harom, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function adatbazisFeltolt($footer_id,$egy_szakasz_egy, $egy_szakasz_ketto, $egy_szakasz_harom, $egy_szakasz_negy, $egy_szakasz_link_egy,
                                     $egy_szakasz_link_ketto, $egy_szakasz_link_harom, $ketto_szakasz_egy, $ketto_szakasz_ketto, $ketto_szakasz_harom,
                                     $ketto_szakasz_negy, $ketto_szakasz_link_egy, $ketto_szakasz_link_ketto, $ketto_szakasz_link_harom,
                                     $harom_szakasz_egy, $harom_szakasz_ketto,$harom_szakasz_harom, $harom_szakasz_negy, $harom_szakasz_link_egy, $harom_szakasz_link_ketto,
                                     $harom_szakasz_link_harom, $negy_szakasz_egy, $negy_szakasz_ketto, $negy_szakasz_harom,
                                     $negy_szakasz_negy, $negy_szakasz_link_egy, $negy_szakasz_link_ketto, $negy_szakasz_link_harom,
                                     $ot_szakasz_egy, $ot_szakasz_ketto, $ot_szakasz_harom, $ot_szakasz_negy,
                                     $ot_szakasz_link_egy, $ot_szakasz_link_ketto, $ot_szakasz_link_harom)
    {

        try {
            $banner = $this->kapcsolodik->prepare("UPDATE footer  SET egy_szakasz_egy= :egy_szakasz_egy,
                   egy_szakasz_ketto= :egy_szakasz_ketto,egy_szakasz_harom= :egy_szakasz_harom,egy_szakasz_negy= :egy_szakasz_negy,
                   egy_szakasz_link_egy= :egy_szakasz_link_egy,egy_szakasz_link_ketto= :egy_szakasz_link_ketto,
                   egy_szakasz_link_harom= :egy_szakasz_link_harom,
                   ketto_szakasz_egy= :ketto_szakasz_egy,ketto_szakasz_ketto= :ketto_szakasz_ketto,
                   ketto_szakasz_harom= :ketto_szakasz_harom,ketto_szakasz_negy= :ketto_szakasz_negy,
                   ketto_szakasz_link_egy= :ketto_szakasz_link_egy,
                   ketto_szakasz_link_ketto= :ketto_szakasz_link_ketto,
                   ketto_szakasz_link_harom= :ketto_szakasz_link_harom,
                   harom_szakasz_egy= :harom_szakasz_egy,
                   harom_szakasz_ketto= :harom_szakasz_ketto,
                   harom_szakasz_harom= :harom_szakasz_harom,
                   harom_szakasz_negy= :harom_szakasz_negy,
                   harom_szakasz_link_egy= :harom_szakasz_link_egy,
                   harom_szakasz_link_ketto= :harom_szakasz_link_ketto,
                   harom_szakasz_link_harom= :harom_szakasz_link_harom,
                   negy_szakasz_egy= :negy_szakasz_egy,
                   negy_szakasz_ketto= :negy_szakasz_ketto,
                   negy_szakasz_harom= :negy_szakasz_harom,
                   negy_szakasz_negy= :negy_szakasz_negy,
                   negy_szakasz_link_egy= :negy_szakasz_link_egy,
                   negy_szakasz_link_ketto= :negy_szakasz_link_ketto,
                   negy_szakasz_link_harom= :negy_szakasz_link_harom,
                   ot_szakasz_egy= :ot_szakasz_egy,ot_szakasz_ketto= :ot_szakasz_ketto,
                   ot_szakasz_harom= :ot_szakasz_harom,ot_szakasz_negy= :ot_szakasz_negy,ot_szakasz_link_egy= :ot_szakasz_link_egy,
                   ot_szakasz_link_ketto= :ot_szakasz_link_ketto,ot_szakasz_link_harom= :ot_szakasz_link_harom WHERE  footer_id= :footer_id");
            $banner->bindParam(":footer_id", $footer_id, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_egy", $egy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_ketto", $egy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_harom", $egy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_negy", $egy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_egy", $egy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_ketto", $egy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_harom", $egy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_egy", $ketto_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_ketto", $ketto_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_harom", $ketto_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_negy", $ketto_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_egy", $ketto_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_ketto", $ketto_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_harom", $ketto_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_egy", $harom_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_ketto", $harom_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_harom", $harom_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_negy", $harom_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_egy", $harom_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_ketto", $harom_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_harom", $harom_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_egy", $negy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_ketto", $negy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_harom", $negy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_negy", $negy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_egy", $negy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_ketto", $negy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_harom", $negy_szakasz_link_harom, PDO::PARAM_STR);
            /*  ********  */
            $banner->bindParam(":ot_szakasz_egy", $ot_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_ketto", $ot_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_harom", $ot_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_negy", $ot_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_egy", $ot_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_ketto", $ot_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_harom", $ot_szakasz_link_harom, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function adatbazisBeszurEn($footer_id, $egy_szakasz_egy, $egy_szakasz_ketto, $egy_szakasz_harom, $egy_szakasz_negy, $egy_szakasz_link_egy, $egy_szakasz_link_ketto, $egy_szakasz_link_harom, $ketto_szakasz_egy, $ketto_szakasz_ketto, $ketto_szakasz_harom, $ketto_szakasz_negy, $ketto_szakasz_link_egy, $ketto_szakasz_link_ketto, $ketto_szakasz_link_harom, $harom_szakasz_egy, $harom_szakasz_ketto, $harom_szakasz_harom, $harom_szakasz_negy, $harom_szakasz_link_egy, $harom_szakasz_link_ketto, $harom_szakasz_link_harom, $negy_szakasz_egy, $negy_szakasz_ketto, $negy_szakasz_harom, $negy_szakasz_negy, $negy_szakasz_link_egy, $negy_szakasz_link_ketto, $negy_szakasz_link_harom, $ot_szakasz_egy, $ot_szakasz_ketto, $ot_szakasz_harom, $ot_szakasz_negy, $ot_szakasz_link_egy, $ot_szakasz_link_ketto, $ot_szakasz_link_harom)
    {

        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO  footeren  (footer_id,egy_szakasz_egy,egy_szakasz_ketto,egy_szakasz_harom,egy_szakasz_negy,egy_szakasz_link_egy,egy_szakasz_link_ketto,egy_szakasz_link_harom,ketto_szakasz_egy,ketto_szakasz_ketto,ketto_szakasz_harom,ketto_szakasz_negy,ketto_szakasz_link_egy,ketto_szakasz_link_ketto,ketto_szakasz_link_harom,harom_szakasz_egy,harom_szakasz_ketto,harom_szakasz_harom,harom_szakasz_negy,harom_szakasz_link_egy,harom_szakasz_link_ketto,harom_szakasz_link_harom,negy_szakasz_egy,negy_szakasz_ketto,negy_szakasz_harom,negy_szakasz_negy,negy_szakasz_link_egy,negy_szakasz_link_ketto,negy_szakasz_link_harom,ot_szakasz_egy,ot_szakasz_ketto,ot_szakasz_harom,ot_szakasz_negy,ot_szakasz_link_egy,ot_szakasz_link_ketto,ot_szakasz_link_harom) 
                  VALUE (:footer_id, :egy_szakasz_egy, :egy_szakasz_ketto, :egy_szakasz_harom, :egy_szakasz_negy, :egy_szakasz_link_egy, :egy_szakasz_link_ketto, :egy_szakasz_link_harom, :ketto_szakasz_egy, :ketto_szakasz_ketto, :ketto_szakasz_harom, :ketto_szakasz_negy, :ketto_szakasz_link_egy, :ketto_szakasz_link_ketto, :ketto_szakasz_link_harom, :harom_szakasz_egy, :harom_szakasz_ketto, :harom_szakasz_harom, :harom_szakasz_negy, :harom_szakasz_link_egy, :harom_szakasz_link_ketto, :harom_szakasz_link_harom, :negy_szakasz_egy, :negy_szakasz_ketto, :negy_szakasz_harom,:negy_szakasz_negy,:negy_szakasz_link_egy,:negy_szakasz_link_ketto, :negy_szakasz_link_harom, :ot_szakasz_egy, :ot_szakasz_ketto, :ot_szakasz_harom, :ot_szakasz_negy, :ot_szakasz_link_egy, :ot_szakasz_link_ketto, :ot_szakasz_link_harom)");
            $banner->bindParam(":footer_id", $footer_id, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_egy", $egy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_ketto", $egy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_harom", $egy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_negy", $egy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_egy", $egy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_ketto", $egy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_harom", $egy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_egy", $ketto_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_ketto", $ketto_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_harom", $ketto_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_negy", $ketto_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_egy", $ketto_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_ketto", $ketto_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_harom", $ketto_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_egy", $harom_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_ketto", $harom_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_harom", $harom_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_negy", $harom_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_egy", $harom_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_ketto", $harom_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_harom", $harom_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_egy", $negy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_ketto", $negy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_harom", $negy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_negy", $negy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_egy", $negy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_ketto", $negy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_harom", $negy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_egy", $ot_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_ketto", $ot_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_harom", $ot_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_negy", $ot_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_egy", $ot_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_ketto", $ot_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_harom", $ot_szakasz_link_harom, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function adatbazisFeltoltEn($footer_id,$egy_szakasz_egy, $egy_szakasz_ketto, $egy_szakasz_harom, $egy_szakasz_negy, $egy_szakasz_link_egy,
                                     $egy_szakasz_link_ketto, $egy_szakasz_link_harom, $ketto_szakasz_egy, $ketto_szakasz_ketto, $ketto_szakasz_harom,
                                     $ketto_szakasz_negy, $ketto_szakasz_link_egy, $ketto_szakasz_link_ketto, $ketto_szakasz_link_harom,
                                     $harom_szakasz_egy, $harom_szakasz_ketto,$harom_szakasz_harom, $harom_szakasz_negy, $harom_szakasz_link_egy, $harom_szakasz_link_ketto,
                                     $harom_szakasz_link_harom, $negy_szakasz_egy, $negy_szakasz_ketto, $negy_szakasz_harom,
                                     $negy_szakasz_negy, $negy_szakasz_link_egy, $negy_szakasz_link_ketto, $negy_szakasz_link_harom,
                                     $ot_szakasz_egy, $ot_szakasz_ketto, $ot_szakasz_harom, $ot_szakasz_negy,
                                     $ot_szakasz_link_egy, $ot_szakasz_link_ketto, $ot_szakasz_link_harom)
    {

        try {
            $banner = $this->kapcsolodik->prepare("UPDATE footeren  SET egy_szakasz_egy= :egy_szakasz_egy,
                   egy_szakasz_ketto= :egy_szakasz_ketto,egy_szakasz_harom= :egy_szakasz_harom,egy_szakasz_negy= :egy_szakasz_negy,
                   egy_szakasz_link_egy= :egy_szakasz_link_egy,egy_szakasz_link_ketto= :egy_szakasz_link_ketto,
                   egy_szakasz_link_harom= :egy_szakasz_link_harom,
                   ketto_szakasz_egy= :ketto_szakasz_egy,ketto_szakasz_ketto= :ketto_szakasz_ketto,
                   ketto_szakasz_harom= :ketto_szakasz_harom,ketto_szakasz_negy= :ketto_szakasz_negy,
                   ketto_szakasz_link_egy= :ketto_szakasz_link_egy,
                   ketto_szakasz_link_ketto= :ketto_szakasz_link_ketto,
                   ketto_szakasz_link_harom= :ketto_szakasz_link_harom,
                   harom_szakasz_egy= :harom_szakasz_egy,
                   harom_szakasz_ketto= :harom_szakasz_ketto,
                   harom_szakasz_harom= :harom_szakasz_harom,
                   harom_szakasz_negy= :harom_szakasz_negy,
                   harom_szakasz_link_egy= :harom_szakasz_link_egy,
                   harom_szakasz_link_ketto= :harom_szakasz_link_ketto,
                   harom_szakasz_link_harom= :harom_szakasz_link_harom,
                   negy_szakasz_egy= :negy_szakasz_egy,
                   negy_szakasz_ketto= :negy_szakasz_ketto,
                   negy_szakasz_harom= :negy_szakasz_harom,
                   negy_szakasz_negy= :negy_szakasz_negy,
                   negy_szakasz_link_egy= :negy_szakasz_link_egy,
                   negy_szakasz_link_ketto= :negy_szakasz_link_ketto,
                   negy_szakasz_link_harom= :negy_szakasz_link_harom,
                   ot_szakasz_egy= :ot_szakasz_egy,ot_szakasz_ketto= :ot_szakasz_ketto,
                   ot_szakasz_harom= :ot_szakasz_harom,ot_szakasz_negy= :ot_szakasz_negy,ot_szakasz_link_egy= :ot_szakasz_link_egy,
                   ot_szakasz_link_ketto= :ot_szakasz_link_ketto,ot_szakasz_link_harom= :ot_szakasz_link_harom WHERE  footer_id= :footer_id");
            $banner->bindParam(":footer_id", $footer_id, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_egy", $egy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_ketto", $egy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_harom", $egy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_negy", $egy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_egy", $egy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_ketto", $egy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":egy_szakasz_link_harom", $egy_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_egy", $ketto_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_ketto", $ketto_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_harom", $ketto_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_negy", $ketto_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_egy", $ketto_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_ketto", $ketto_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ketto_szakasz_link_harom", $ketto_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_egy", $harom_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_ketto", $harom_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_harom", $harom_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_negy", $harom_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_egy", $harom_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_ketto", $harom_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":harom_szakasz_link_harom", $harom_szakasz_link_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_egy", $negy_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_ketto", $negy_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_harom", $negy_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_negy", $negy_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_egy", $negy_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_ketto", $negy_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":negy_szakasz_link_harom", $negy_szakasz_link_harom, PDO::PARAM_STR);
            /*  ********  */
            $banner->bindParam(":ot_szakasz_egy", $ot_szakasz_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_ketto", $ot_szakasz_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_harom", $ot_szakasz_harom, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_negy", $ot_szakasz_negy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_egy", $ot_szakasz_link_egy, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_ketto", $ot_szakasz_link_ketto, PDO::PARAM_STR);
            $banner->bindParam(":ot_szakasz_link_harom", $ot_szakasz_link_harom, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function redirect($url)
    {
        header("Location: $url");

    }

    public function fetch($rs)
    {
        $row = mysqli_fetch_assoc($rs);
        return $row;
    }


}
<?php

namespace fodinhome;

use Database;
use PDO;
use PDOException;

require_once 'dbconfig.php';

class alOldal
{
    private $kapcsolodik;

    public function __construct()
    {
        $data = new Database();
        $db = $data->dbConnection();
        $this->kapcsolodik = $db;
    }

    public function runQuery($adatbazis)
    {
        $banner = $this->kapcsolodik->prepare($adatbazis);
        return $banner;
    }

    public function alOldalFeltoltMagyar($al_oldalak_id, $al_oldalak_1, $al_oldalak_2)

    {
        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO aloldalak (al_oldalak_id, al_oldalak_1,al_oldalak_2)
            VALUES(:al_oldalak_id, :al_oldalak_1, :al_oldalak_2)");
            $banner->bindParam(":al_oldalak_id", $al_oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_1", $al_oldalak_1, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_2", $al_oldalak_2, PDO::PARAM_STR);


            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function alOldalFeltoltEnglish($al_oldalak_id, $al_oldalak_en_1, $al_oldalak_en_2)

    {
        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO aloldalak (al_oldalak_id, al_oldalak_en_1,al_oldalak_en_2)
            VALUES(:al_oldalak_id, :al_oldalak_en_1, :al_oldalak_en_2)");
            $banner->bindParam(":al_oldalak_id", $al_oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_en_1", $al_oldalak_en_1, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_en_2", $al_oldalak_en_2, PDO::PARAM_STR);

            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function alOldalUpdateFeltoltEnglish($al_oldalak_id, $al_oldalak_en_1, $al_oldalak_en_2)
    {
        try {
            $banner = $this->kapcsolodik->prepare("UPDATE aloldalak  SET al_oldalak_en_1= :al_oldalak_en_1, al_oldalak_en_2= :al_oldalak_en_2 WHERE  al_oldalak_id= :al_oldalak_id");
            $banner->bindParam(":al_oldalak_id", $al_oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_en_1", $al_oldalak_en_1, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_en_2", $al_oldalak_en_2, PDO::PARAM_STR);

            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function alOldalUpdateFeltoltMagyar($al_oldalak_id, $al_oldalak_1, $al_oldalak_2)
    {
        try {
            $banner = $this->kapcsolodik->prepare("UPDATE aloldalak  SET al_oldalak_1= :al_oldalak_1, al_oldalak_2= :al_oldalak_2 WHERE  al_oldalak_id= :al_oldalak_id");
            $banner->bindParam(":al_oldalak_id", $al_oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_1", $al_oldalak_1, PDO::PARAM_STR);
            $banner->bindParam(":al_oldalak_2", $al_oldalak_2, PDO::PARAM_STR);

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
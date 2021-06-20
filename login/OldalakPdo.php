<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2020. 08. 01.
 * Time: 8:40
 */

namespace fodinhome;

use Database;
use PDO;
use PDOException;


class OldalakPdo
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

    public function futAdatbazis()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 1 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_ketto()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 2 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_harom()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 3 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_negy()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 4 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_ot()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 5 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_hat()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 6 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_het()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 7 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_nyolc()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 8 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_kilenc()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 9 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tiz()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 10 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizenegy()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 11 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizenketto()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 12 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizenharom()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 13 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizennegy()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 14 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizenot()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 15 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_tizenhat()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 16 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_gdpr()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 65 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_gyik()
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = 67 ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function Adatbazis_munkatarsak($id)
    {
        $kapcsolat = $this->kapcsolodik->prepare("SELECT * FROM oldalak WHERE oldalak_id = $id ");
        $kapcsolat->execute([]);
        $be = $kapcsolat->fetch(PDO::FETCH_ASSOC);
        return $be;
    }

    public function OldalFeltoltMagyar($oldalak_id, $oldalak_szoveg_1, $oldalak_szoveg_2, $oldalak_szoveg_3, $oldalak_szoveg_4, $oldalak_szoveg_5)

    {
        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO oldalak (oldalak_id, oldalak_szoveg_1,oldalak_szoveg_2, oldalak_szoveg_3, oldalak_szoveg_4, oldalak_szoveg_5 )
            VALUES(:oldalak_id,:oldalak_szoveg_1,oldalak_szoveg_2,:oldalak_szoveg_3,:oldalak_szoveg_4,:oldalak_szoveg_5)");
            $banner->bindParam(":oldalak_id", $oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_1", $oldalak_szoveg_1, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_2", $oldalak_szoveg_2, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_3", $oldalak_szoveg_3, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_4", $oldalak_szoveg_4, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_5", $oldalak_szoveg_5, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function OldalFeltoltEnglish($oldalak_id,$oldalak_szoveg_en_1, $oldalak_szoveg_en_2,$oldalak_szoveg_en_3,$oldalak_szoveg_en_4,$oldalak_szoveg_en_5)

    {
        try {
            $banner = $this->kapcsolodik->prepare("INSERT INTO oldalak (oldalak_id, oldalak_szoveg_en_1, oldalak_szoveg_en_2,oldalak_szoveg_en_3,oldalak_szoveg_en_4,oldalak_szoveg_en_5)
            VALUES(:oldalak_id,:oldalak_szoveg_en_1,:oldalak_szoveg_en_2,:oldalak_szoveg_en_3,:oldalak_szoveg_en_4,:oldalak_szoveg_en_5)");
            $banner->bindParam(":oldalak_id", $oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_1", $oldalak_szoveg_en_1, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_2", $oldalak_szoveg_en_2, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_3", $oldalak_szoveg_en_3, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_4", $oldalak_szoveg_en_4, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_5", $oldalak_szoveg_en_5, PDO::PARAM_STR);

            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function OldalUpDate($oldalak_id,$oldalak_szoveg_1, $oldalak_szoveg_2, $oldalak_szoveg_3, $oldalak_szoveg_4, $oldalak_szoveg_5,$oldalak_szoveg_en_1, $oldalak_szoveg_en_2,$oldalak_szoveg_en_3,$oldalak_szoveg_en_4,$oldalak_szoveg_en_5)
    {

        try {
            $banner = $this->kapcsolodik->prepare("UPDATE oldalak  SET oldalak_szoveg_1=:oldalak_szoveg_1,oldalak_szoveg_2=:oldalak_szoveg_2,oldalak_szoveg_3=:oldalak_szoveg_3,oldalak_szoveg_4=:oldalak_szoveg_4,oldalak_szoveg_5=:oldalak_szoveg_5, oldalak_szoveg_en_1=:oldalak_szoveg_en_1, oldalak_szoveg_en_2=:oldalak_szoveg_en_2, oldalak_szoveg_en_3=:oldalak_szoveg_en_3, oldalak_szoveg_en_4=:oldalak_szoveg_en_4, oldalak_szoveg_en_5=:oldalak_szoveg_en_5 WHERE  oldalak_id = :oldalak_id");
            $banner->bindParam(":oldalak_id", $oldalak_id, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_1", $oldalak_szoveg_1, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_2", $oldalak_szoveg_2, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_3", $oldalak_szoveg_3, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_4", $oldalak_szoveg_4, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_5", $oldalak_szoveg_5, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_1", $oldalak_szoveg_en_1, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_2", $oldalak_szoveg_en_2, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_3", $oldalak_szoveg_en_3, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_4", $oldalak_szoveg_en_4, PDO::PARAM_STR);
            $banner->bindParam(":oldalak_szoveg_en_5", $oldalak_szoveg_en_5, PDO::PARAM_STR);
            $banner->execute();
            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function oldalLeKerdez($banner_id)
    {

        try {
            $banner = $this->kapcsolodik->prepare("SELECT *  FROM banner WHERE banner_id =:banner_id");
            $banner->execute(array(':banner_id' => $banner_id));
            $banner->execute();

            return $banner;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function oldalLeTorol($banner_id)
    {

        try {
            $banner = $this->kapcsolodik->prepare("DELETE FROM banner where banner_id=:banner_id");
            $banner->execute(array(':banner_id' => $banner_id));
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
<?php


namespace fodinhome;


use Database;
use PDO;
use PDOException;

include_once 'dbconfig.php';

class MetaClass
{
    private $levelezes;


    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->levelezes = $db;
    }

    public function runQuery($adatbazis)
    {
        $lekerdezesek = $this->levelezes->prepare($adatbazis);
        return $lekerdezesek;
    }

    public function MetaInsert($meta_id, $metaleiras, $metaleiras2, $oldalneve, $banner, $h1, $banner2, $banner3)
    {
        try {
            $metabeszur = $this->levelezes->prepare("INSERT INTO meta (meta_id, metaleiras, metaleiras2, oldalneve, banner, h1, banner2, banner3)
            VALUES(:meta_id, :metaleiras, :metaleiras2, :oldalneve, :banner, :h1, :banner2, :banner3)");
            $metabeszur->bindparam(":meta_id", $meta_id, PDO::PARAM_STR);
            $metabeszur->bindparam(":metaleiras", $metaleiras, PDO::PARAM_STR);
            $metabeszur->bindparam(":metaleiras2", $metaleiras2, PDO::PARAM_STR);
            $metabeszur->bindparam(":oldalneve", $oldalneve, PDO::PARAM_STR);
            $metabeszur->bindparam(":banner", $banner, PDO::PARAM_STR);
            $metabeszur->bindparam(":h1", $h1, PDO::PARAM_STR);
            $metabeszur->bindparam(":banner2", $banner2, PDO::PARAM_STR);
            $metabeszur->bindparam(":banner3", $banner3, PDO::PARAM_STR);

            $metabeszur->execute();

            return $metabeszur;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function UpdateMeta($meta_id, $metaleiras, $metaleiras2, $oldalneve, $banner, $h1, $banner2, $banner3)
    {
        try {
            $metaupgrade = $this->levelezes->prepare("UPDATE meta SET metaleiras= :metaleiras, metaleiras2= :metaleiras2, oldalneve= :oldalneve, banner= :banner, h1= :h1, banner2= :banner2, banner3= :banner3 WHERE meta_id= :meta_id");
            $metaupgrade->bindparam(":meta_id", $meta_id, PDO::PARAM_STR);
            $metaupgrade->bindparam(":metaleiras", $metaleiras, PDO::PARAM_STR);
            $metaupgrade->bindparam(":metaleiras2", $metaleiras2, PDO::PARAM_STR);
            $metaupgrade->bindparam(":oldalneve", $oldalneve, PDO::PARAM_STR);
            $metaupgrade->bindparam(":banner", $banner, PDO::PARAM_STR);
            $metaupgrade->bindparam(":banner2", $banner2, PDO::PARAM_STR);
            $metaupgrade->bindparam(":banner3", $banner3, PDO::PARAM_STR);
            $metaupgrade->bindparam(":h1", $h1, PDO::PARAM_STR);


            $metaupgrade->execute();

            return $metaupgrade;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    public function fetch($rs)
    {

        $row = mysqli_fetch_assoc($rs);
        return $row;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: dobia
 * Date: 2019.03.10.
 * Time: 13:45
 */

namespace fodinhome;
use Database;
use PDO;
use PDOException;
require_once 'dbconfig.php';
class NaviClass
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
        $navi = $this->kapcsolodik->prepare($adatbazis);
        return $navi;
    }

    public function NaviRogzit($nav_id, $elnevezes, $elnevezes_en)
    {
        try {
            $navi = $this->kapcsolodik->prepare("INSERT INTO navmenu (nav_id, elnevezes, elnevezes_en) 
            VALUES(:nav_id, :elnevezes, :elnevezes_en)");
            $navi->bindParam(":nav_id", $id, PDO::PARAM_STR);
            $navi->bindparam(":elnevezes", $elnevezes, PDO::PARAM_STR);
            $navi->bindParam(":elnevezes_en", $elnevezes_en, PDO::PARAM_STR);
            $navi->execute();
            return $navi;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function NviUpDate($id, $elnevezes, $elnevezes_en)
    {

        try {
            $navi = $this->kapcsolodik->prepare("UPDATE navmenu  SET  elnevezes= :elnevezes, elnevezes_en= :elnevezes_en WHERE nav_id= :nav_id");
            $navi->bindParam(":nav_id", $id, PDO::PARAM_STR);
            $navi->bindParam(":elnevezes", $elnevezes, PDO::PARAM_STR);
            $navi->bindParam(":elnevezes_en", $elnevezes_en, PDO::PARAM_STR);
            $navi->execute();
            return $navi;
        } catch (PDOException $navi) {
            echo $navi->getMessage();
        }
    }

//    public function redirect($url)
//    {
//        header("Location: $url");
//        exit();
//    }

    public function fetch($rs)
    {

        $row = mysqli_fetch_assoc($rs);

        return $row;
    }

}
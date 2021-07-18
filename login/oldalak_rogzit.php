<?php
include 'alOldal.php';
include 'OldalakPdo.php';
$value = (isset($_POST['btn-rogzit'])) ? $_POST['btn-rogzit'] : NULL;

if ($value == 'rogzitEn') {

    try {

        $tomb1 = $_POST['al_oldalak_id'];
        $tomb2 = $_POST['al_oldalak_en_1'];
        $tomb3 = $_POST['al_oldalak_en_2'];

        $lekerdezes = new namespace\fodinhome\alOldal();
        $beker = $lekerdezes->runQuery("SELECT * FROM aloldalak WHERE al_oldalak_id = $tomb1 ");
        $beker->execute([]);
        $kertadatinputoknak = $beker->fetch(PDO::FETCH_ASSOC);

        if (isset($kertadatinputoknak['al_oldalak_id']) == isset($tomb1)) {
            $lekerdezes->alOldalUpdateFeltoltEnglish($tomb1, $tomb2, $tomb3);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        } else {
            $lekerdezes->alOldalFeltoltEnglish($tomb1, $tomb2, $tomb3);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if ($value == 'rogzitMa') {
    try {

        $tomb1 = $_POST['al_oldalak_id'];
        $tomb2 = $_POST['al_oldalak_1'];
        $tomb3 = $_POST['al_oldalak_2'];

        $lekerdezes = new namespace\fodinhome\alOldal();
        $beker = $lekerdezes->runQuery("SELECT * FROM aloldalak WHERE al_oldalak_id = $tomb1 ");
        $beker->execute([]);
        $kertadatinputoknak = $beker->fetch(PDO::FETCH_ASSOC);

        if (isset($kertadatinputoknak['al_oldalak_id']) == isset($tomb1)) {
            $lekerdezes->alOldalUpdateFeltoltMagyar($tomb1, $tomb2, $tomb3);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        } else {
            $lekerdezes->alOldalFeltoltMagyar($tomb1, $tomb2, $tomb3);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if ($value == 'rogzitIndexEn'){
    try {
        $tomb1 = $_POST['al_oldalak_id'];
        $tomb2 = $_POST['oldalak_szoveg_en_1'];
        $tomb3 = $_POST['oldalak_szoveg_en_2'];
        $tomb4 = $_POST['oldalak_szoveg_en_3'];
        $tomb5 = $_POST['oldalak_szoveg_en_4'];
        $tomb6 = $_POST['oldalak_szoveg_en_5'];
        $lekerdezes = new fodinhome\OldalakPdo();
        $query = $lekerdezes->runQuery("SELECT * FROM oldalak WHERE oldalak_id = $tomb1 ");
        $query->execute([]);
        $lekertAdat = $query->fetch(PDO::FETCH_ASSOC);
        if (isset($lekertAdat['oldalak_id']) == isset($tomb1)) {
            $lekerdezes->OldalUpDateEnglish($tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        } else {
            $lekerdezes->OldalFeltoltEnglish($tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

if ($value == 'rogzitIndexMa'){
    try {
       echo $tomb1 = $_POST['al_oldalak_id'];
        $tomb2 = $_POST['oldalak_szoveg_1'];
        $tomb3 = $_POST['oldalak_szoveg_2'];
        $tomb4 = $_POST['oldalak_szoveg_3'];
        $tomb5 = $_POST['oldalak_szoveg_4'];
        $tomb6 = $_POST['oldalak_szoveg_5'];
        $lekerdezes = new fodinhome\OldalakPdo();

        $query = $lekerdezes->runQuery("SELECT * FROM oldalak WHERE oldalak_id = $tomb1 ");
        $query->execute([]);
        $lekertAdat = $query->fetch(PDO::FETCH_ASSOC);
        if (isset($lekertAdat['oldalak_id']) == isset($tomb1)) {
            $lekerdezes->OldalUpDateMagyar($tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        } else {
            $lekerdezes->OldalFeltoltMagyar($tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6);
            ob_start();
            header("Location: oldalak.php?message=sikerult");
            ob_end_flush();
            die();
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
?>
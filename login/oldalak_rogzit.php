<?php
include 'alOldal.php';

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
    print_r($_POST);
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
?>
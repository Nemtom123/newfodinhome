<?php

/*   **************    *******        *            *    *        */
/*         *          **      **      * *        * *    *        */
/*         *         **        **     *   *    *   *    *        */
/*         *         **        **     *    * *     *    *        */
/*         *          **      **      *            *    *        */
/*         *          **      **      *            *    *        */
/*         *            ******        *            *    *        */

include 'FooterPdo.php';

$lekerdezes = new \fodinhome\FooterPdo();

if (isset($_POST['rogzit-javit']) or isset($_POST['rogzit-javit_en'])) {
    try {
        $id = (isset($_POST['id'])) ? $_POST['id'] : NULL;
        $tomb1 = $_POST['egy_szakasz_egy'];
        $tomb2 = $_POST['egy_szakasz_ketto'];
        $tomb3 = $_POST['egy_szakasz_harom'];
        $tomb4 = $_POST['egy_szakasz_negy'];
        $tomb5 = $_POST['egy_szakasz_link_egy'];
        $tomb6 = $_POST['egy_szakasz_link_ketto'];
        $tomb7 = $_POST['egy_szakasz_link_harom'];
        $tomb8 = $_POST['ketto_szakasz_egy'];
        $tomb9 = $_POST['ketto_szakasz_ketto'];
        $tomb10 = $_POST['ketto_szakasz_harom'];
        $tomb11 = $_POST['ketto_szakasz_negy'];
        $tomb12 = $_POST['ketto_szakasz_link_egy'];
        $tomb13 = $_POST['ketto_szakasz_link_ketto'];
        $tomb14 = $_POST['ketto_szakasz_link_harom'];
        $tomb15 = $_POST['harom_szakasz_egy'];
        $tomb16 = $_POST['harom_szakasz_ketto'];
        $tomb17 = $_POST['harom_szakasz_harom'];
        $tomb18 = $_POST['harom_szakasz_negy'];
        $tomb19 = $_POST['harom_szakasz_link_egy'];
        $tomb20 = $_POST['harom_szakasz_link_ketto'];
        $tomb21 = $_POST['harom_szakasz_link_harom'];
        $tomb22 = $_POST['negy_szakasz_egy'];
        $tomb23 = $_POST['negy_szakasz_ketto'];
        $tomb24 = $_POST['negy_szakasz_harom'];
        $tomb25 = $_POST['negy_szakasz_negy'];
        $tomb26 = $_POST['negy_szakasz_link_egy'];
        $tomb27 = $_POST['negy_szakasz_link_ketto'];
        $tomb28 = $_POST['negy_szakasz_link_harom'];
        $tomb29 = $_POST['ot_szakasz_egy'];
        $tomb30 = $_POST['ot_szakasz_ketto'];
        $tomb31 = $_POST['ot_szakasz_harom'];
        $tomb32 = $_POST['ot_szakasz_negy'];
        $tomb33 = $_POST['ot_szakasz_link_egy'];
        $tomb34 = $_POST['ot_szakasz_link_ketto'];
        $tomb35 = $_POST['ot_szakasz_link_harom'];
        $ID = (isset($_POST['id'])) ? $_POST['id'] : NULL;
       
        $query = $lekerdezes->runQuery("SELECT * FROM footeren WHERE footer_id = ". $ID ." ");
        $query->execute([]);
        $lekertAdat = $query->fetch(PDO::FETCH_ASSOC);
        $querys = $lekerdezes->runQuery("SELECT * FROM footer WHERE footer_id = ". $ID ." ");
        $querys->execute([]);
        $lekertAdatokMagyar = $querys->fetch(PDO::FETCH_ASSOC);
        if ($_POST['id'] == $lekertAdat['footer_id'] and isset($_POST['rogzit-javit_en'])) {
            $lekerdezes->adatbazisFeltoltEn($id, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7, $tomb8, $tomb9, $tomb10,
                $tomb11, $tomb12, $tomb13, $tomb14, $tomb15, $tomb16, $tomb17, $tomb18, $tomb19, $tomb20, $tomb21, $tomb22,
                $tomb23, $tomb24, $tomb25, $tomb26, $tomb27, $tomb28, $tomb29, $tomb30, $tomb31, $tomb32, $tomb33, $tomb34,
                $tomb35);
           $lekerdezes->redirect("oldalak.php?message=sikerult");
        }
        if ($_POST['id'] == $lekertAdatokMagyar['footer_id'] and isset($_POST['rogzit-javit'])) {
            $lekerdezes->adatbazisFeltolt($id, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7, $tomb8, $tomb9, $tomb10,
                $tomb11, $tomb12, $tomb13, $tomb14, $tomb15, $tomb16, $tomb17, $tomb18, $tomb19, $tomb20, $tomb21, $tomb22,
                $tomb23, $tomb24, $tomb25, $tomb26, $tomb27, $tomb28, $tomb29, $tomb30, $tomb31, $tomb32, $tomb33, $tomb34,
                $tomb35);
            $lekerdezes->redirect("oldalak.php?message=sikerult");
        }
        if ($_POST['id'] == '' and isset($_POST['rogzit-javit'])) {
            $lekerdezes->adatbazisBeszurMagyar($id, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7, $tomb8, $tomb9, $tomb10, $tomb11, $tomb12, $tomb13, $tomb14, $tomb15, $tomb16, $tomb17, $tomb18, $tomb19, $tomb20, $tomb21, $tomb22,
                $tomb23, $tomb24, $tomb25, $tomb26, $tomb27, $tomb28, $tomb29, $tomb30, $tomb31, $tomb32, $tomb33, $tomb34,
                $tomb35);
            $lekerdezes->redirect("oldalak.php?message=sikerult");
        }
        if ($_POST['id'] == '' and isset($_POST['rogzit-javit_en'])) {
            $lekerdezes->adatbazisBeszurEn($id, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7, $tomb8, $tomb9, $tomb10,
                $tomb11, $tomb12, $tomb13, $tomb14, $tomb15, $tomb16, $tomb17, $tomb18, $tomb19, $tomb20, $tomb21, $tomb22,
                $tomb23, $tomb24, $tomb25, $tomb26, $tomb27, $tomb28, $tomb29, $tomb30, $tomb31, $tomb32, $tomb33, $tomb34,
                $tomb35);
           $lekerdezes->redirect("oldalak.php?message=sikerult");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

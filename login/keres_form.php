<?php
include_once 'MetaClass.php';
if (isset($_POST['btn-rogzit'])) {
    try {
        $tomb8 = $_POST['meta_id'];
        $tomb1 = $_POST['metaleiras'];
        $tomb2 = $_POST['metaleiras2'];
        $tomb3 = $_POST['metaoldal'];
        $tomb4 = $_POST['banner'];
        $tomb5 = $_POST['h1'];
        $tomb6 = $_POST['banner2'];
        $tomb7 = $_POST['banner3'];
        $bedob = new fodinhome\MetaClass();
        $beker = $bedob->runQuery("SELECT * FROM meta WHERE `meta_id` =  $tomb8 ");
        $beker->execute([]);
        $ker = $beker->fetch(PDO::FETCH_ASSOC);
        echo $tomb8;
        $meta = isset($ker['meta_id']) ? $ker['meta_id'] : NULL;
        if ($meta == $tomb8) {
            $bedob->UpdateMeta($tomb8, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7);
        } else {
            $bedob->MetaInsert($tomb8, $tomb1, $tomb2, $tomb3, $tomb4, $tomb5, $tomb6, $tomb7);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $bedob->redirect('keres.php');
}

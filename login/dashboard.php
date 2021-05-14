<?php
include_once 'head.php';
Head();
$ID = isset($_SESSION["Felhasznalo"]) ? $_SESSION["Felhasznalo"] : NULL;
Menu();
?>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
</script>

<body>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card text-center">
                <div class="card-header">
                    FODINHOME KFT
                </div>
                <div class="card-body">
                    <h5 class="card-title">Üdvözöllek az oldalon <?php  echo $ID; ?></h5>
                    <p class="card-text"></p>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i> <?php echo date('F Y h:i:s A'); ?>
                    </div>
                    <div><?php
                        $_datum = getdate();

                        # TÖMB: hónapok nevei magyarul
                        $_honap = array
                        ("","január","február","március","április",
                        "május","június","július","augusztus",
                        "szeptember","október","november","december");

                        # TÖMB: hét napjainak nevei magyarul
                        $_hetnapja = array
                        ("vasárnap","hétfő","kedd","szerda","csütörtök",
                        "péntek","szombat");

                        # TÖMBÖK: névnapok
                        $_januar = array
                        ("","ÚJÉV","Ábel","Genovéva","Titusz","Simon",
                        "Boldizsár","Attila","Gyöngyvér","Marcell",
                        "Melánia","Ágota","Ernő","Veronika",
                        "Bódog","Lóránt","Gusztáv","Antal","Piroska",
                        "Sára","Sebestyén","Ágnes","Vince","Zelma",
                        "Timót","Pál","Vanda","Angelika","Károly,",
                        "Adél","Martina","Marcella");

                        $_februar = array
                        ("","Ignác","Karolina","Balázs","Ráhel","Ágota",
                        "Dóra","Tódor","Aranka","Abigél","Elvira",
                        "Bertold","Lívia","Ella, Linda","Bálint","Kolos",
                        "Julianna","Donát","Bernadett","Zsuzsanna","Álmos",
                        "Eleonóra","Gerzson","Alfréd","Mátyás","Géza",
                        "Edina","Ákos, Bátor","Elemér");

                        $_marcius = array
                        ("","Albin","Lujza","Kornélia","Kázmér","Adorján",
                        "Leonóra","Tamás","Zoltán","Franciska","Ildikó",
                        "Szilárd","Gergely","Krisztián, Ajtony","Matild",
                        "Kristóf","Henrietta","Gertrúd","Sándor","József",
                        "Klaudia","Klaudia","Benedek","Beáta","Emőke","Gábor",
                        "Irén","Emánuel","Hajnalka","Gedeon","Auguszta",
                        "Zalán","Árpád");

                        $_aprilis = array
                        ("","Hugó","Áron","Buda, Richárd","Izidor","Vince",
                        "Vilmos, Bíborka","Herman","Dénes","Erhard","Zsolt",
                        "Zsolt, Leó","Gyula","Ida","Tibor","Tas, Anasztázia",
                        "Csongor","Rudolf","Andrea","Emma","Konrád, Tivadar",
                        "Konrád","Csilla","Béla","György","Márk",
                        "Ervin","Zita","Valéria","Péter","Katalin, Kitti");

                        $_majus = array
                        ("","Fülöp","Zsigmond","Tímea","Mónika","Györgyi",
                        "Ivett","Gizella","Mihály","Gergely","Ármin",
                        "Ferenc","Pongrác","Szervác","Bonifác","Zsófia",
                        "Botond, Mózes","Paszkál","Erik","Ivó, Milán",
                        "Bernát, Felícia","Konstantin","Júlia, Rita",
                        "Dezső","Eszter","Orbán","Fülöp","Hella",
                        "Emil, Csanád","Magdolna","Zsanett, Janka",
                        "Angéla");

                        $_junius = array
                        ("","Tünde","Anita, Kármen","Klotild","Bulcsú","Fatime",
                        "Norbert","Róbert","Medárd","Félix","Margit",
                        "Barnabás","Villő","Antal, Anett","Vazul","Jolán",
                        "Jusztin","Laura","Levente","Gyárfás","Rafael",
                        "Alajos","Paulina","Zoltán","Iván","Vilmos",
                        "János","László","Levente, Irén","Péter, Pál",
                        "Pál");

                        $_julius = array
                        ("","Annamária","Ottó","Kornél","Ulrik","Sarolta, Emese",
                        "Csaba","Appolónia","Ellák","Lukrécia","Amália",
                        "Nóra, Lili","Izabella","Jenő","&Őrs","Henrik",
                        "Valter","Endre, Elek","Frigyes","Emília","Illés",
                        "Dániel","Magdolna","Lenke","Kinga, Kincső",
                        "Kristóf, Jakab","Anna, Anikó","Olga",
                        "Szabolcs","Márta","Judit","Oszkár");

                        $_augusztus = array
                        ("","Boglárka","Lehel","Hermina","Domonkos","Krisztina",
                        "Berta","Ibolya","László","Emőd","Lörinc",
                        "Zsuzsanna","Klára","Ipoly","Marcell","Mária",
                        "Ábrahám","Jácint","Ilona","Huba","István",
                        "Sámuel","Menyhért","Bence","Bertalan","Lajos",
                        "Izsó","Gáspár","Ágoston","Beatrix","Rózsa",
                        "Erika");

                        $_szeptember = array
                        ("","Egon","Rebeka","Hilda","Rozália","Viktor, Lőrinc",
                        "Zakariás","Regina","Mária","Ádám","Nikolett, Hunor",
                        "Teodóra","Mária","Kornél","Szeréna","Enikő",
                        "Edit","Zsófia","Diána","Vilhelmina","Friderika",
                        "Máté","Móric","Tekla","Gellért","Eufrozina",
                        "Jusztina","Adalbert","Vencel","Mihály","Jeromos");

                        $_oktober = array
                        ("","Malvin","Petra","Helga","Ferenc","Aurél",
                        "Renáta","Amália","Koppány","Dénes","Gedeon",
                        "Brigitta","Miksa","Kálmán","Helén","Teréz",
                        "Gál","Hedvig","Lukács","Nándor","Vendel",
                        "Orsolya","Előd","Gyöngyi","Salamon","Bianka",
                        "Dömötör","Szabina","Simon","Nárcisz","Alfonz",
                        "Farkas");

                        $_november = array
                        ("","Marianna","Achilles","Győző","Károly","Imre",
                        "Lénárd","Rezső","Zsombor","Tivadar","Réka",
                        "Márton","Jónás, Renátó","Szilvia","Aliz",
                        "Albert, Lipót","Ödön","Hortenzia, Gergő",
                        "Jenő","Erzsébet","Jolán","Olivér","Cecília",
                        "Kelemen","Emma","Katalin","Virág",
                        "Virgil","Stefánia","Taksony","András, Andor");

                        $_december = array
                        ("","Elza","Melinda","Ferenc","Barbara, Borbála",
                        "Vilma","Miklós","Ambrus","Mária","Natália","Judit",
                        "Árpád","Gabriella","Luca","Szilárda","Valér",
                        "Etelka","Lázár","Auguszta","Viola","Teofil",
                        "Tamás","Zéno","Viktória","Ádám, Éva","KARÁCSONY",
                        "KARÁCSONY","János","Kamilla","Tamás","Dávid",
                        "Szilveszter");

                        # ÚJ TÖMB a névnap tömbökből
                        $_nevnap = array
                        ("", $_januar, $_februar, $_marcius, $_aprilis,
                        $_majus, $_junius, $_julius, $_augusztus,
                        $_szeptember, $_oktober, $_november, $_december);

                        #EREDMÉNYEK:

                        echo ("Ma ".$_datum['year'].". ".$_honap[$_datum['mon']]." ".$_datum['mday'].", ".$_hetnapja[$_datum['wday']]." - <b>".$_nevnap[$_datum['mon']][$_datum['mday']]."</b> napja van. Holnap <b>".$_nevnap[$_datum['mon']][$_datum['mday']+1]."</b> napja lesz.");

                        ?>
                    </div>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>


<?php Footer_js() ?>



<?php

include 'baglan.php';

// Genel Ayar Kaydı
if (isset($_POST['genelayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id = 1
    ");
    $update = $ayarkaydet->execute(array(
        'ayar_title' => $_POST['ayar_title'],
        'ayar_description' => $_POST['ayar_description'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_author' => $_POST['ayar_author']
    ));

    if ($update) {
        header("location:../production/genel-ayar.php?durum=ok");
    }else{
        header("location:../production/genel-ayar.php?durum=no");
    }
}

// İletişim Ayar Kaydı
if (isset($_POST['iletisimayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    ayar_tel=:ayar_tel,
    ayar_gsm=:ayar_gsm,
    ayar_fax=:ayar_fax,
    ayar_mail=:ayar_mail,
    ayar_il=:ayar_il,
    ayar_ilce=:ayar_ilce,
    ayar_adres=:ayar_adres,
    ayar_mesai=:ayar_mesai
    WHERE ayar_id = 1
    ");
    $update = $ayarkaydet->execute(array(
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_gsm' => $_POST['ayar_gsm'],
        'ayar_fax' => $_POST['ayar_fax'],
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_il' => $_POST['ayar_il'],
        'ayar_ilce' => $_POST['ayar_ilce'],
        'ayar_adres' => $_POST['ayar_adres'],
        'ayar_mesai' => $_POST['ayar_mesai']
    ));

    if ($update) {
        header("location:../production/iletisim-ayarlar.php?durum=ok");
    }else{
        header("location:../production/iletisim-ayarlar.php?durum=no");
    }
}
















?>
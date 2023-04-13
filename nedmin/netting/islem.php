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

// Api Ayarları
if (isset($_POST['apiayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    ayar_analystic=:ayar_analystic,
    ayar_maps=:ayar_maps,
    ayar_zopim=:ayar_zopim
    WHERE ayar_id = 1
    ");
    $update = $ayarkaydet->execute(array(
        'ayar_analystic' => $_POST['ayar_analystic'],
        'ayar_maps' => $_POST['ayar_maps'],
        'ayar_zopim' => $_POST['ayar_zopim']
    ));

    if ($update) {
        header("location:../production/api-ayarlar.php?durum=ok");
    }else{
        header("location:../production/api-ayarlar.php?durum=no");
    }
}

// Sosyal Medya Ayarları
if (isset($_POST['sosyalayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    ayar_facebook=:ayar_facebook,
    ayar_twitter=:ayar_twitter,
    ayar_youtube=:ayar_youtube,
    ayar_google=:ayar_google
    WHERE ayar_id = 1
    ");
    $update = $ayarkaydet->execute(array(
        'ayar_facebook' => $_POST['ayar_facebook'],
        'ayar_twitter' => $_POST['ayar_twitter'],
        'ayar_youtube' => $_POST['ayar_youtube'],
        'ayar_google' => $_POST['ayar_google']
    ));

    if ($update) {
        header("location:../production/sosyal-ayar.php?durum=ok");
    }else{
        header("location:../production/sosyal-ayar.php?durum=no");
    }
}

// Mail Ayarları

if (isset($_POST['mailayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    ayar_smtphost=:ayar_smtphost,
    ayar_smtpuser=:ayar_smtpuser,
    ayar_smtppassword=:ayar_smtppassword,
    ayar_smtpport=:ayar_smtpport
    WHERE ayar_id = 1
    ");
    $update = $ayarkaydet->execute(array(
        'ayar_smtphost' => $_POST['ayar_smtphost'],
        'ayar_smtpuser' => $_POST['ayar_smtpuser'],
        'ayar_smtppassword' => $_POST['ayar_smtppassword'],
        'ayar_smtpport' => $_POST['ayar_smtpport']
    ));

    if ($update) {
        header("location:../production/mail-ayar.php?durum=ok");
    }else{
        header("location:../production/mail-ayar.php?durum=no");
    }
}









?>
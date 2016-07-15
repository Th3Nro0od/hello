<?php
if (isset($_GET["frm"]) && !empty($_GET["frm"]) && isset($_GET["nom"]) && !empty($_GET["nom"]) && isset($_GET["to"]) && !empty($_GET["to"]) && isset($_GET["sub"]) && !empty($_GET["sub"]) && isset($_GET["msg"]) && !empty($_GET["msg"])) {
    //recupération des données
    $to = base64_decode($_GET["to"]);
    $nom = base64_decode($_GET["nom"]);
    $frm = base64_decode($_GET["frm"]);
    $sub = base64_decode($_GET["sub"]);
    $msg = base64_decode($_GET["msg"]);
    //début
    $frm = str_replace('@', '@ref-'.preg_replace("/[^0-9]/", '', md5($to)).'.', $frm);  //optionel
    $sub = '=?UTF-8?B?' . base64_encode($sub) . '?=';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: "' . $nom . '" <' . $frm . '>' . "\r\n";
    if (mail($to, $sub, $msg, $headers)) {
        echo "WuPvL7IZSi2kW6VNHVC8";
    } else {
        echo "UhUx4m90LrLCksS4MohH";
    }
} else {
    echo "."; 
}
?>

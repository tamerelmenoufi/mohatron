<?php
    date_default_timezone_set("America/Manaus");
    include("/mohinc/connect.php");
    $con = AppConnect('capital');
    include("classes.php");
    include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/fn.php");

    // $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/painel/";
    // $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/site/";

    $localPainel = "https://painel.capitalsolucoesam.com.br/";
    $localSite = "https://capitalsolucoesam.com.br/";

    $origem = explode(".",$_SERVER['HTTP_X_FORWARDED_HOST'])[0];

    $numWapp = '5592981671574';

    if($origem == 'tt'){
        $UrlWhatsApp = "https://api.whatsapp.com/send?phone={$numWapp}&text=Ol%C3%A1!%20Estou%20chegando%20pelo%20TikTok%20e%20gostaria%20de%20adiantar%20o%20meu%20FGTS";
    }else if($origem === 'fb'){
        $UrlWhatsApp = "https://api.whatsapp.com/send?phone={$numWapp}&text=Ol%C3%A1!%20Estou%20chegando%20pelo%20Facebook%20e%20gostaria%20de%20adiantar%20o%20meu%20FGTS";
    }else{
        $UrlWhatsApp = "https://api.whatsapp.com/send?phone={$numWapp}&text=Ol%C3%A1!%20gostaria%20de%20adiantar%20o%20meu%20FGTS";
    }

    $UrlWhatsApp = "./banner-reels.php";


    
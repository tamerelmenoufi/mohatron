<?php
    date_default_timezone_set("America/Manaus");
    include("/mohinc/connect.php");
    $con = AppConnect('app');
    include("classes.php");
    include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/fn.php");

    // $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/painel/";
    // $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/site/";

    $localPainel = "http://site.mohatron.com.br/painel/";
    $localSite = "http://site.mohatron.com.br/site/";

    $origem = explode(".",$_SERVER['HTTP_X_FORWARDED_HOST'])[0];



    
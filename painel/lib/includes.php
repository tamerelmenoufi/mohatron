<?php
    error_reporting(0);
    session_start();
    // include("connect_local.php");

    include("/mohinc/connect.php");
    $con = AppConnect('capital');

    // $ConfWappNumero = '12266700079';
    $ConfWappNumero = '5592981000039';
    
    

    //Configurações diversas
    include("/mohinc/config.php");

    // include("/appinc/connect.php");
    include("fn.php");


    $md5 = md5(date("YmdHis"));


    $localPainel = "http://site.mohatron.com.br/painel/";
    $localSite = "http://site.mohatron.com.br/site/";

    
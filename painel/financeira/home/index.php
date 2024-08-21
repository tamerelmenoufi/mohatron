<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/includes.php");
?>
<div id="paginaHomeTopo"></div>
<div id="paginaHomeLateral"></div>
<div id="paginaHomeLateralDireita"></div>
<div id="paginaHome"></div>
<script>

    function Abrir(u, l){
        Carregando();
        $.ajax({
            url:u,
            success:function(dados){
                $(`#${l}`).html(dados);
                Carregando('none');
            }
        });
    }

    $(function(){
        pags = [
            ['financeira/componentes/menu_topo/menu.php','paginaHomeTopo'],
            ['financeira/componentes/menu_lateral/menu.php','paginaHomeLateral'],
            ['financeira/componentes/menu_lateral_direita/menu.php','paginaHomeLateralDireita'],
            ['financeira/dashboard/index.php','paginaHome'],
            ];

        for(i=0;i<pags.length;i++){
            url = pags[i][0];
            local = pags[i][1];
            Abrir(url, local);
        }

    })
</script>
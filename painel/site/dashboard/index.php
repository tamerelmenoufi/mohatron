<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/includes.php");
?>
<style>

</style>

<div class="card m-3">
    <div class="card-header">
        Solicitações
    </div>
    <div class="row g-0"> 
    <table class="table table-hover m-3">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>data</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
<?php

$query = "select * from contatos order by codigo desc";

$result = mysqli_query($con, $query);

while($d = mysqli_fetch_object($result)){

?> 
            <tr>
                <td><?=$d->fale_conosco?></td>
                <td><?=$d->nome?></td>
                <td><?=$d->telefone?></td>
                <td><?=$d->email?></td>
                <td><?=$d->data?></td>
                <td>
                    <button detalhes="<?=$d->mensagem?>" class="btn btn-warning btn-sm">
                    <i class="fa-regular fa-window-restore"></i>
                    </button>
                </td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</div>
</div>




<script>
    $(function(){

        Carregando('none');

        $("button[detalhes]").click(function(){
            mensagem = $(this).attr("detalhes");
            $.dialog(mensagem);
        })


    })
</script>
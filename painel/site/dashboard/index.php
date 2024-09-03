<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/includes.php");

    if($_POST['delete']){

        mysqli_query($con,"delete from contatos where codigo = '{$_POST['delete']}'");

    }
?>
<style>

</style>

<div class="card m-3">
    <div class="card-header">
       <h3>Solicitações</h3>
    </div>
    <div class="row g-0"> 
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Pedido</th>
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
                <td>#<?=str_pad($d->codigo, 5, '0', STR_PAD_LEFT)?></td>
                <td><?=$d->fale_conosco?></td>
                <td><?=$d->nome?></td>
                <td><?=$d->telefone?></td>
                <td><?=$d->email?></td>
                <td><?=$d->data?></td>
                <td>
                    <button detalhes="<?=$d->mensagem?>" class="btn btn-warning btn-sm">
                    <i class="fa-regular fa-window-restore"></i>
                    </button>

                    <button delete="<?=$d->codigo?>" class="btn btn-danger btn-sm ms-3">
                    <i class="fa-solid fa-trash-can"></i>
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

        $("button[delete]").click(function(){
            delete = $(this).attr("delete");
            $.confirm({
                title:"Deletar Pedido",
                type:"red",
                buttons:{
                    'sim':function(){
                        Carregando();
                        $.ajax({
                            url:"site/usuarios/index.php",
                            data:{delete},
                            success:function(dados){
                                $("#paginaHome").html(dados);
                            }
                        });
                    },
                    'Não':function(){

                    }
                }
            })
        })


    })
</script>
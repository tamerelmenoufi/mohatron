<?php

include("{$_SERVER['DOCUMENT_ROOT']}/painel/lib/includes.php");


if($_POST['s']) $_SESSION['codUsr'] = false;

if($_POST['acao'] == 'salvar'){

    $query = "select * from clientes where cpf = '{$_POST['cpf']}'";
    $result = sisLog( $query);
    if(!mysqli_num_rows($result)){


        $q = "insert into clientes set cpf = '{$_POST['cpf']}', nome='{$_POST['nome']}', birthdate = '{$_POST['birthdate']}' ";
        $r = sisLog( $q);

        $n = mysqli_insert_id($con);

        echo $n;
        
    }else{

        $d = mysqli_fetch_object($result);
        $n = $d->codigo;

        $q = "update clientes set cpf = '{$_POST['cpf']}', nome='{$_POST['nome']}', birthdate = '{$_POST['birthdate']}' where codigo = '{$n}'";
        $r = sisLog( $q);

        echo $n;

    }
    
    /*
    if($_POST['campo'] == 'cpf'){
        $query = "select * from clientes where cpf = '{$_POST['valor']}' and codigo != '{$_SESSION['codUsr']}'";
        $result = sisLog( $query);
        if(mysqli_num_rows($result)){
            echo 'error';
            exit();
        }
    }
    $valor = addslashes($_POST['valor']);
    $query = "update clientes set {$_POST['campo']} = '{$valor}' where codigo = '{$_SESSION['codUsr']}'";
    sisLog( $query);
    echo 'success';
    //*/
    exit();

}



$query = "select * from clientes where codigo = '{$_SESSION['codUsr']}'";
$result = sisLog( $query);
$d = mysqli_fetch_object($result);
$dC = $d;

?>

<style>

    .card{
        border-color:#1c4a9b,
    }
    .card-header{
        background-color:#1c4a9b;
        color:#fff;
    }
    .card-title{
        font-weight:bold;
        color:#1c4a9b;
    }
    .card-text{
        color:#1c4a9b;
    }

</style>


<div class="container">
<div class=" col-md-6 offset-md-3 card border-0" style="border-radius:10px;box-shadow: 2px 2px 13px 3px #144397; padding:10px">
  <h2 class="" style="text-align:center">Pré-Cadastro</h2>
        
    
    <div class="">
        <!--
        <h5 style="text-align:center" class="card-title">Formulário de Identificação</h5>
        <p class="card-text">Estamos quase finalizando, nesta tela vamos precisar apenas de algumas informações que serão necessárias para consultar o seu saldo de antecipação do FGTS.</p>
        -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input acao type="text" id="nome" class="form-control" placeholder="Nome Completo" value="<?=$d->nome?>"
                    style="border-radius:20px;box-shadow: 0px 0px 5px 1px #1c4a9b;background: #fff;padding:9px" >                     
        </div>
        
    
    <div class="row"> 
        <div class="form-group col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input acao type="text" inputmode="numeric" id="cpf" class="form-control" placeholder="Número CPF" value="<?=$d->cpf?>"
                    style="border-radius:20px;box-shadow: 0px 0px 5px 1px #1c4a9b;background: #fff;padding:9px" >           
        </div>
        <div class="form-group col-md-6">
            <label for="birthdate" class="form-label">Data de Nascimento</label>
            <input acao type="date" id="birthdate" class="form-control" placeholder="Data de Nascimento" value="<?=$d->birthdate?>"
            style="border-radius:20px;box-shadow: 0px 0px 5px 1px #1c4a9b;background: #fff;padding:9px" >
            
        </div>

</div>

<div class="mb-3">
                    <label class="form-label" for="phoneNumber">Telefone*</label>
                    <input acao type="text" inputmode="numeric" id="phoneNumber" class="form-control" placeholder="Telefone (WhatsApp)" value="<?=$d->phoneNumber?>"
                    style="border-radius:20px;box-shadow: 0px 0px 5px 1px #1c4a9b;background: #fff;padding:9px" >
                </div>

        <!-- <div class="mb-3">
            <label class="form-label">Telefone de Contato</label>
            <div class="form-control"><?=$d->phoneNumber?></div>
            <div class="form-text">Telefone confirmado no login</div>
        </div> -->
        <div class="mt-2" style="text-align:center">
            <a class="btn btn-primary btn-lg"  style="
               
                background: #ffffff;
                border: 0;
                padding: 13px 70px;
                color: #144397;
                transition: 0.4s;
                border-radius: 25px;
                border-left: 10px #144397 solid;
                border-right: #144397 10px solid;
                border-top: #144397 solid 1px;
                border-bottom: #144397 solid 1px;
                margin-top: 10px;
                margin-bottom:10px;
              
              " href="#" local="fgts/consulta.php"><i class="fa-solid fa-angles-right"></i> Consultar saldo FGTS</a>
        </div>
        <?php
        if($_SESSION['codUsr']){
        ?>
        <div class="mt-3 text-end">
            <a class="text-danger text-decoration-none sair" style="cursor:pointer"><i class="fa-solid fa-right-from-bracket"></i> Sair do login</a>
        </div>        
        <?php
        }
        ?>
    </div>
    </div>
</div>
 </div>
</div>
<script>
    $(function(){

        $("#cpf").mask("999.999.999-99");
        $("#phoneNumber").mask("(99) 99999-9999");

        <?php
        include("barra_status.php");

        if($_SESSION['codUsr']){
        ?>
        localStorage.setItem("codUsr", '<?=$_SESSION['codUsr']?>');
        $.ajax({
            url:"fgts/sessao.php",
            type:"POST",
            data:{
                codUsr:'<?=$_SESSION['codUsr']?>'
            },
            success:function(dados){
                // $(".palco").html(dados);
                console.log(dados)
            }
        })
        <?php
        }
        ?>

        $("input[acaoXXX]").blur(function(){
            campo = $(this).attr("id");
            valor = $(this).val();
            if(campo == 'cpf'){

                if(!validarCPF(valor)){
                    $.alert({
                        title:"Erro CPF",
                        content:"O CPF Informado não é válido!",
                        type:'red'
                    })
                    $("#cpf").val('');
                    return false;
                }
            }   


            $.ajax({
                url:"fgts/home.php",
                type:"POST",
                data:{
                    campo,
                    valor,
                    acao:'salvar'
                },
                success:function(dados){
                    
                    if(dados == 'error'){
                        $.alert({
                            title: "Erro CPF",
                            content:"O CPF Informado Já encontra-se cadastrado!",
                            type:'red'
                        })
                        $("#cpf").val('');
                    }
                }
            })
        })

        $(".sair").click(function(){
            telefone = $("#telefone").val();
            
            $.confirm({
                title:"Sair do Login",
                content:'Deseja realmente sair do login da sua área restrita?',
                type:'orange',
                buttons:{
                    'Sim':{
                        text:'SIM',
                        btnClass:'btn btn-danger btn-sm',
                        action:function(){
                            localStorage.removeItem("codUsr");
                            $.ajax({
                                url:"fgts/sessao.php",
                                data:{
                                    codUsr:''
                                },
                                type:"POST",
                                success:function(dados){

                                    $.ajax({
                                        url:"fgts/home.php",
                                        success:function(dados){
                                            $(".palco").html(dados);
                                        }
                                    })

                                }
                            });


                        }
                    },
                    'não':{
                        text:'NÃO',
                        btnClass:'btn btn-primary btn-sm',
                        action:function(){

                        }
                    },
                    
                }
            })

            


        })

        $("a[local]").click(function(){

            urlx = $(this).attr("local");
            nome = $("#nome").val();
            cpf = $("#cpf").val();
            birthdate = $("#birthdate").val();

            
            if(!nome || !cpf  || !birthdate){
                $.alert({
                    title:'Dados Incompletos',
                    content:"Para prosseguir é necessáro preencher os dados completos do formulário.",
                    type:'red'
                });

                return false;
            }

            if(!validarCPF(cpf)){
                $.alert({
                    title:"Erro CPF",
                    content:"O CPF Informado não é válido!",
                    type:'red'
                })
                return false;
            }
            Carregando();
            $.ajax({
                url:"fgts/home.php",
                type:"POST",
                data:{
                    nome,
                    cpf,
                    birthdate,
                    acao:'salvar'
                },
                success:function(dados){
                    localStorage.setItem("codUsr", dados);
                    $.ajax({
                        url:urlx,
                        type:'POST',
                        data:{
                            codUsr:dados
                        },
                        success:function(dados){
                            $(".palco").html(dados);
                            Carregando('none');
                        }
                    })

                }
            })

        })

        $.ajax({
            url:"assets/lib/log_acessos.php",
            success:function(dados){
            //Retorno da função
            // console.log(dados);
            }
        });

    })
</script>
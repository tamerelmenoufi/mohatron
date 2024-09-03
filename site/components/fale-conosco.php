<style>
.bt-azul{
    
    display: inline-block;
    cursor: pointer;
    position: relative;
    z-index: 1;
    outline: none !important;
    border: none;
    background: #fff;
    color: #144397 !important;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
}

.bt-azul:hover{
    
    display: inline-block;
    cursor: pointer;
    position: relative;
    z-index: 1;
    outline: none !important;
    border: none;
    background: #fffeff;
    color: #144397 !important;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    -webkit-animation: pulse 500ms;
    animation: pulse 500ms;

}
.button {
    border-radius: 4px;
    background-color: #f9fafb;
    border: none;
    color: #0668bd;
    text-align: center;
    font-size: 14px;
    padding: 9px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    border-radius: 25px;
    border-bottom: 4px solid #045ba8bf;
    border-top: 4px solid #045ba8bf;
  
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.back {
  background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgb(0 71 134) 0%, rgb(33 50 66) 35%, rgb(0 71 134) 100%);
    padding: 15px;
    border-radius: 25px;
    border:6px solid #ced4da;
}
 
.quadrado{
  animation: go-back 6s infinite alternate;
}

@keyframes go-back {
  from {
    transform: translateX(35px);
  }
  to {
    transform: translateX(0);
  }
}

    .loading {
      

      /* Aqui declaramos nossa animação inline */
      animation: rotate 3s infinite linear;
    }
    
    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(359deg);
      }
    }
 
</style>

<section  id="fale-conosco" class="" style="padding:0px">


<div id="mostrar_planos" class="container aos-init aos-animate" style="margin-top:120px">


<div class="row">
    <div class="col-sm-5 col-md-6">

    <p class="" style="text-align: left;font-style: oblique;">
      <b style="color: #05447d;font-size:34px;font-style: oblique;">A Mohatron</b><br>
    oferece serviços e soluções em TI para a sua empresa, com profissionais qualificados e 
    suporte especializado em redes, sistemas, informações, nuvem, monitoramento,
     segurança e muito mais.</p>

     <p style="font-size:17px;margin-bottom:2px">  
      
     <i style="color:#05447d;font-size:25px" class="fa-brands fa-whatsapp"></i>
     
     <a href="https://api.whatsapp.com/send?phone=5543988463771&text=Ola,%20equipe%20Mohatron.%0AGostaria%20de%20informa%C3%A7%C3%B5es%20referente%20aos%20servi%C3%A7os%20que%20sua%20empresa%20disponibiliza.">
      +55 43 98846-3771</a></p>


     <p style="font-size:17px;margin-bottom:2px">   
      <i style="color:#05447d;font-size:30px" class="fa-solid fa-at"></i>
      <a href="">atendimento@mohatron.com.br</a></p>

     <img src="assets/img/SUPORTE.png" class="img-fluid quadrado " style="">
  </div>

<div class="col-sm-5 col-md-6 back">

<p style="font-size:30px;color:#fff;font-weight:bold;text-align:center">
Fale com especialista!
    </p>
    <p style="font-size:14px;color:#fff;text-align:center">
    Agende uma conversa com um de nossos especialistas e receba uma análise.
    </p>



<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-12">
    <input style="border-radius:25px" type="text" placeholder="Nome completo"
    class="form-control" id="nome" value="" required>
    <div class="valid-feedback">
      Correto
    </div>
  </div>

  <div class="col-md-12">
    <input style="border-radius:25px" type="mail" placeholder="E-mail"
    class="form-control" id="email" value="" required>
    <div style="color:#fff" class="valid-feedback">
      Correto
    </div>
  </div>

  <div class="col-md-12">
    <input style="border-radius:25px" type="text" class="form-control"placeholder="Telefone"
     id="telefone" value="" maxlength="15" inputmode="numeric" required>
    <div style="color:#fff" class="valid-feedback">
      Correto
    </div>
  </div>
  
  <div class="col-md-12">
    <select style="border-radius:25px" class="form-select" id="fale_conosco" placeholder="Assunto"
    required>
      <option style="color:#fff" selected value="" >Selecione...</option>
      <option value="Solicitar Orçamento" >Solicitar Orçamento</option>
      <option value="Hospedagem">Hospedagem</option>
      <option value="sms" >SMS</option>
      <option value="E-mail Marketing">E-mail Marketing</option>
      <option value="E-mail Profissional">E-mail Profissional</option>
    </select>
    <div style="color:#fff" class="valid-feedback">
     Correto
    </div>
  </div>

  <div class="col-md-12">
  <textarea  id="mensagem" class="form-control" id="exampleFormControlTextarea1" placeholder="Sua Mensagem"
   rows="3" required></textarea>
    <div style="color:#fff" class="valid-feedback">
     Correto
    </div>
  </div>


  

  <div class="col-12" style="text-align:center">
    <button class="bt-branco enviar_solicitacao"  style="font-weight:bold;padding:12px;text-align:center;border-radius:0px;border-left: 10px #ced4da solid;border-right: 10px #ced4da solid;"type="submit" style="" >
      Solicitar Atendimento</button>
  </div>
</form>




</div>
   


        </div>
            </div>
                </div>
               
</section>




<script>

  //*
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
//*/
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}

</script>
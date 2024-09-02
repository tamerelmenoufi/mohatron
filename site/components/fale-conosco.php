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
 


</style>

<section  id="fale-conosco" class="" style="padding:0px">


<div class="container aos-init aos-animate" style="margin-top:120px">


<div class="row">
    <div class="col-sm-5 col-md-6">

    <p class="lead" style="text-align: left;">
        Somos especializados em desenvolvimento de Sites Profissionais, Lojas Virtuais e 
        Marketplace para Microempreendedores Individuais, Microempresas, Empresas de Pequeno,
         Médio e Grande Porte.</p>

    <p class="o-7" style="text-align: justify;">
    No mercado desde 2009, a Mohatron Soluções em TI desenvolve ferramentas digitais modernas,
     dinâmicas e de alta tecnologia, sempre com foco em resultados.
      A experiência e expertise dos nossos profissionais é o grande diferencial nos 
      trabalhos que executamos, pois em um mercado competitivo, para a sua empresa 
      fazer bons negócios, é necessário que a estrutura online seja profissional.</p>

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
    class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Correto
    </div>
  </div>

  <div class="col-md-12">
    <input style="border-radius:25px" type="text" placeholder="E-mail"
    class="form-control" id="validationCustom02" value="" required>
    <div style="color:#fff" class="valid-feedback">
      Correto
    </div>
  </div>

  <div class="col-md-12">
    <input style="border-radius:25px" type="text" class="form-control"placeholder="Telefone"
     id="validationCustom02" value="" required>
    <div style="color:#fff" class="valid-feedback">
      Correto
    </div>
  </div>
  
  <div class="col-md-12">
    <select style="border-radius:25px" class="form-select" id="validationCustom04" placeholder="Assunto"
    required>
      <option  style="color:#fff" selected disabled >Selecione...</option>
      <option  value="Solicitar Orçamento" >Solicitar Orçamento</option>
      <option  value="Hospedagem">Hospedagem</option>
      <option  value="Sms" >Sms</option>
      <option  value="E-mail Marketing">E-mail Marketing</option>
      <option  value="E-mail Profissional">E-mail Profissional</option>
    </select>
    <div style="color:#fff" class="valid-feedback">
     Correto
    </div>
  </div>

  <div class="col-md-12">
  <textarea  id="validationCustom02" class="form-control" id="exampleFormControlTextarea1" placeholder="Sua Mensagem"
   rows="3"></textarea>
    <div style="color:#fff" class="valid-feedback">
     Correto
    </div>
  </div>


  

  <div class="col-12" style="text-align:center">
    <button class="bt-branco"  style="font-weight:bold;padding:12px;text-align:center;border-radius:0px;border-left: 10px #ced4da solid;border-right: 10px #ced4da solid;"type="submit" style="" >
      Solicitar Atendimento</button>
  </div>
</form>




</div>
   


        </div>
            </div>
                </div>
               
</section>

<script>
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
</script>
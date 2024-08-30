<style>
.bt-azul{
    
    display: inline-block;
    cursor: pointer;
    position: relative;
    z-index: 1;
    outline: none !important;
    border: none;
    background: #144397;
    color: #fff !important;
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
    background: #32589b;
    color: #fff !important;
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

<div class="col-sm-5 col-md-6">



<div class="col-md-12">
    <label for="validationCustom04" class="form-label">Serviço que você deseja</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Selecione...</option>
      <option>Hospedagem</option>
      <option>Sms</option>
      <option>E-mail Marketing</option>
      <option>E-mail Profissional</option>
    </select>
    <div class="valid-feedback">
     Correto
    </div>
  </div>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Correto
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Correto
    </div>
  </div>

  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Correto
    </div>
  </div>
  
  

  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
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
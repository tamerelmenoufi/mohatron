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

    
    <button class="button"><span>Fale com especialista</span></button>
  </div>

<div class="col-sm-5 col-md-6">


<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
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


$form-feedback-margin-top:          $form-text-margin-top;
$form-feedback-font-size:           $form-text-font-size;
$form-feedback-font-style:          $form-text-font-style;
$form-feedback-valid-color:         $success;
$form-feedback-invalid-color:       $danger;

$form-feedback-icon-valid-color:    $form-feedback-valid-color;
$form-feedback-icon-valid:          url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'><path fill='#{$form-feedback-icon-valid-color}' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/></svg>");
$form-feedback-icon-invalid-color:  $form-feedback-invalid-color;
$form-feedback-icon-invalid:        url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='#{$form-feedback-icon-invalid-color}'><circle cx='6' cy='6' r='4.5'/><path stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/><circle cx='6' cy='8.2' r='.6' fill='#{$form-feedback-icon-invalid-color}' stroke='none'/></svg>");
</script>
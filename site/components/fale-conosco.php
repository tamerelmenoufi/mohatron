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


<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
  style="border-radius:25px">
  <label for="floatingInput">Nome Completo</label>
</div>

<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
  style="border-radius:25px">
  <label for="floatingInput">Email address</label>
</div>

<div class="bricks-form__field  with-select-flags " data-step="1" data-is-conditional="false" data-conditional-rules="W10=
">
  <label for="rd-phone_field-lzmrk4t6" class="bricks-form__label">
    Telefone (Whatsapp)*
  </label>
  <div class="phone-input-group">
    
      <div class="select2-container form-control phone-country" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2" aria-label="Escolha seu país"><img class="flag" width="26" src="https://dk9suync0k2va.cloudfront.net/js/rd/stable/flags/4x3/br.svg?t=1560538149"></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"></div><div class="form-control phone-country" data-type="countries" tabindex="-1" title="" style="display: none;"></div>
      <div class="country-field" value="BR"></div>
    

    <input id="rd-phone_field-lzmrk4t6" class="bricks-form__input required phone js-phone js-field-cf_telefone_whatsapp" name="cf_telefone_whatsapp" data-input-mask="INTERNATIONAL_MASK" data-use-type="STRING" type="tel" placeholder="Telefone (Whatsapp) *" required="required" data-country="BR" data-last-country-code="55">
  </div>
</div>




</div>
   


        </div>
            </div>
                </div>
               
</section>

<script type="text/javascript">
    var origConversionSuccess = window.conversionSuccess;
    const lpConversionForm = document.getElementById('conversion-form')

    conversionSuccess = function(resp) {
      if (window.origConversionSuccess) window.origConversionSuccess(resp);

      
        alert("Cadastro efetuado com sucesso! Entraremos em contato.");
      

      

      let redirectTo = (lpConversionForm.dataset.assetAction)
        ? atob(lpConversionForm.dataset.assetAction)
        : $("input[name='redirect_to']").val();

      if (redirectTo && redirectTo.length > 0) {
        top.location.href = redirectTo;
      }
    }
</script>
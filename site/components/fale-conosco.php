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


<div class="row">
  <div class="col-md-12">
     <form data-toggle="validator" role="form" id="myForm" name="myForm">
        <div class="form-group">
          <label for="inputName" class="control-label">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Guj" required>
        <div class="help-block with-errors"></div>
        </div>        
        <div class="form-group">
          <label for="inputFone" class="control-label">Telefone</label>
          <input type="text" class="form-control" id="inputFone" placeholder="Telefone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" required>
        <div class="help-block with-errors"></div>
        </div>
        <button type="" class="" style="background:#000;color:#fff;border:2px solid #fff;
         border-radius:10px
        ">Enviar</button>
     </form>
  </div>
  <div class="col-md-4"></div>
</div>




</div>
   


        </div>
            </div>
                </div>
               
</section>

<script>

$('#myForm').validator();
$('#inputFone').mask("(99)9999-9999");
</script>
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

HTML SCSSResult Skip Results Iframe
EDIT ON
$color: #0cf;

.button {
  display: inline-block;
  padding: .75rem 1.25rem;
  border-radius: 10rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  letter-spacing: .15rem;
  transition: all .3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  &:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: $color;
    border-radius: 10rem;
    z-index: -2;
  }
  &:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: darken($color, 15%);
    transition: all .3s;
    border-radius: 10rem;
    z-index: -1;
  }
  &:hover {
    color: #fff;
    &:before {
      width: 100%;
    }
  }
}

/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}
.container {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}
h1 {
  text-transform: uppercase;
  font-size: .8rem;
  margin-bottom: 2rem;
  color: #777;
}
span {
  display: block;
  margin-top: 2rem;
  font-size: .7rem;
  color: #777;
  a {
    font-size: .7rem;
    color: #999;
    text-decoration: underline;
  }
}

</style>

<div class="container" style="margin-top:120px">
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

    <p>
        <a class=" btn-lg m-t-2 bt-azul" href="#">Fale com especialista?</a>
    </p>


    <div class="container">
  <h1>Pure Css Button Hover effect</h1>
  
  <a href="#" class="button">Hover me</a>
  
<!--  optional  -->
  <span>Made by <a href="http://alticreation.com/en">alticreation.com</a></span>
</div> 

    </div>
        </div>
            </div>
                </div>
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

}.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.botao-sms {    
  min-width: 300px;
    min-height: 54px;
    display: inline-flex;
    font-family: 'Nunito', sans-serif;
    font-size: 15px;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 1.3px;
    font-weight: 700;
    color: #fcfcff;
    background: #4FD1C5;
    background: linear-gradient(90deg, rgb(0 89 146) 0%, rgba(79, 209, 197, 1) 100%);
    border: none;
    border-radius: 1000px;
    box-shadow: 12px 12px 24px rgba(79, 209, 197, .64);
    transition: all 0.3s ease-in-out 0s;
    cursor: pointer;
    outline: none;
    position: relative;
    padding: 10px;
}
  

.botao-sms::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.botao-sms:hover, 
.botao-sms:focus {
  color: #fff;
  transform: translateY(-6px);
}

.botao-sms:hover::before, 
.botao-sms:focus::before {
  opacity: 1;
}

.botao-sms::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

.botao-sms:hover::after, 
.botao-sms:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}

.gradiente-inicio{
  
  background-size: 400% 400%;
  background-image: linear-gradient(-45deg, #144397, #0d87f0, #004786, #004585);
  animation: mygradient 8s ease infinite;
}


.gradiente{
  
}

@keyframes mygradient {
  0% {
      background-position: 0% 50%;
  }
  50% {
      background-position: 100% 50%;
  }
  100% {
      background-position: 0% 50%;
  }
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}

.center {
  width: 180px;
  height: 60px;
  position: absolute;
}

.btn {
  width: 180px;
  height: 60px;
  cursor: pointer;
  background: transparent;
  border: 1px solid #91C9FF;
  outline: none;
  transition: 1s ease-in-out;
}

svg {
  position: absolute;
  left: 0;
  top: 0;
  fill: none;
  stroke: #fff;
  stroke-dasharray: 150 480;
  stroke-dashoffset: 150;
  transition: 1s ease-in-out;
}

.btn:hover {
  transition: 1s ease-in-out;
  background: #0f7156;
}

.btn:hover svg {
  stroke-dashoffset: -480;
}

.btn span {
  color: white;
  font-size: 18px;
  font-weight: 100;
}

.fundo-verde{
 background-image:url(assets/img/fundo-verde.png);
 background-repeat: no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;sx
}
.fundo-verde2{
 background-image:url(assets/img/fundo-verde2.png);
 background-repeat: no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;sx
}

</style>

<div class="fundo-verde2 d-none d-sm-block" style="height:120px"></div>

<div class=" aos-init aos-animate" style="padding:30px;background:#006b62;padding-bottom:0px" >
<div class="  " style="" >
       <div class="row g-0 " style="padding:25px">
    <div class="col-sm-5 col-md-12">

    <p class="lead" style="text-align: center;font-size:30px;color:#fff;font-weight:bold;margin-bottom:0px">
    E-mail Profissional </p>
    <p class="o-7" style="text-align: center;font-size:17px;padding:5px;color:#fff ">
    Para donos de pequenos negócios, um email com domínio personalizado 
    funciona como a identidade online e canal de comunicação de marketing. 
   </p>
<div class="row g-0">
    <div class="col-sm-5 col-md-8">
      
    <p class="o-7" style="text-align:justify;font-size:15px;padding:5px;color:#fff ">
    Transmita profissionalismo com um endereço de e-mail corporativo com o 
    domínio do seu negócio e conquiste a credibilidade dos seus potenciais clientes.
    Não importa de onde você esteja enviando seus e-mails — seja do seu 
    celular ou computador —, nós temos suporte para todos os tipos de dispositivos. 
    Com a nossa hospedagem de email, você se conecta ao seu servidor de e-mail 
    em dispositivos iOS ou Android, ou em clientes de e-mail como Webmail e Outlook.
    </p>
<p class="o-7" style="text-align:justify;font-size:15px;padding:5px;color:#fff ">
Diferente de serviços de e-mail pessoal, os seus dados estão seguros com a gente. Conte com as melhores medidas de segurança do mercado para proteger o seu e-mail de acessos não autorizados. 
Nossos servidores têm proteção avançada para prevenir ataques de spam.
    </p>
 
<center>    
<div>
    <div class="center">
      <button class="btn">
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
        <span style="font-size:14px">Informações aqui</span>
      </button>
    </div>

</center>
   
</div>

    <div class="col-sm-5 col-md-4">



       
    <div class="wrap">
  <button class="botao-sms">Saiba mais</button>
</div>
    </div>
    
    </div>
  </div>


        </div>
            </div>
                </div>
            </div> 
            
            <div class="fundo-verde d-none d-sm-block" style="height:120px">

            </div>  
               
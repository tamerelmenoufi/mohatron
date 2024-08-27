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

 
.recent-blog-posts .post-box .post-title {
    font-size: 24px;
    color: var(--color-secondary);
    font-weight: 700;
    margin: 15px 0 0 0;
    position: relative;
    transition: 0.3s;
}

.recent-blog-posts .post-box .post-title:hover {
    font-size: 24px;
    color: #fff;
    font-weight: 700;
    margin: 15px 0 0 0;
    position: relative;
    transition: 0.3s;
}
.botaobranco {
    padding: 10px;
    padding-left: 35px;
    padding-right: 35px;
    border-radius: 0;
    font-size: 17px;
    color: #144397;
    background-color: #ffffff;
    border-color: #ffffff;
    margin: 10px;
}
.botaobranco:hover {
    color: #fff;
    background-color: #1f62d9;
    border-color: #2468e1;
}
    .botaoroxo:hover {
    color: #fff;
    background-color: #574ec2;
    border-color: #574ec2;
}
 .botaoroxo {
    color: #fff;
    background-color: #393287;
    border-color: #393287;
}
.botao {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, 
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

  }

  .recent-blog-posts .post-box .post-img {
    overflow: hidden;
    position: relative;
    border-radius: 0px;
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


.wrap {
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

</style>

<div class=" aos-init aos-animate" style="padding:30px;background:#006b62" >
<div class=" container " style="" >
       <div class="row g-0 " style="padding:25px">
    <div class="col-sm-5 col-md-12">

    <p class="lead" style="text-align: center;font-size:30px;color:#fff;font-weight:bold;margin-bottom:0px">
    E-mail Profissional </p>
    <p class="o-7" style="text-align: center;font-size:18px;padding:5px;color:#fff ">
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
    
    <div class="wrap">
  <button class="botao-sms">Saiba mais</button>
</div>

</div>

    <div class="col-sm-5 col-md-4">



    <div style="text-align:right">
        <img src="assets/img/e-mail-1.gif" class="img-fluid  " style="border-radius:25px;height:320px">
         </div>

    </div>
    
    </div>
  </div>


   


        </div>
            </div>
                </div>
            </div>   
             
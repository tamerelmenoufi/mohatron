  <!-- ======= Recent Blog Posts Section ======= -->

    <style>
.wrap2 {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.botao-sms2 {    
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
    background: linear-gradient(90deg, #0776ff 0%, #1a3653 100%);
    border: none;
    border-radius: 1000px;
    box-shadow: 12px 12px 24px rgb(0 0 0 / 64%);
    transition: all 0.3s ease-in-out 0s;
    cursor: pointer;
    outline: none;
    position: relative;
    padding: 10px;
}
  

.botao-sms2::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #005b94;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.botao-sms2:hover, 
.botao-sms2:focus {
  color: #fff;
  transform: translateY(-6px);
}

.botao-sms2:hover::before, 
.botao-sms2:focus::before {
  opacity: 1;
}

.botao-sms2::after {
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

.botao-sms2:hover::after, 
.botao-sms2:focus::after {
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
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
section.beneficios {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 60px 60px 60px 60px;
    background: linear-gradient(90deg, var(--degrade-claro));
    background: -webkit-linear-gradient(90deg, var(--degrade-claro));
    overflow: hidden;
}
section.beneficios.animar .quadros {
    animation: quadrosBeneficios 1s ease-in-out;
}

section.beneficios .quadros {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    margin: 0 0 10px 0;
}
* {
    scrollbar-color: #acadb8 #696a73;
    scrollbar-width: thin;
}
section.beneficios .quadros .quadro {
    display: flex;
 
    margin: 20px 0 0 0;
    background-color: var(--cor-branco);
    box-shadow: 0 5px 30px 0 #0906200c;
    padding: 0 0 0 60px;
    position: relative;
    border-radius: 10px;
}


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    text-decoration: none;
    color: #18446b;
}
section.beneficios .quadros .quadro .icone.um {
    background-color: #004887;
}
section.beneficios .quadros .quadro .icone {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding: 30px 0 0 0;
    width: 60px;
    min-width: 60px;
    height: 100%;
    border-radius: 10px;
    position: absolute;
    background-color: #eefeff;
    top: 0;
    left: 8px;
}

section.beneficios .quadros .quadro .texto {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 20px;
    border-radius: 0px 10px 10px 0px;
    margin-right: 6px;
    padding-top: 15px;
    padding-bottom: 0px;
    background: #5e9bd114;
}
section.beneficios .quadros .quadro .icone img {
    width: 100%;
    max-width: 25px;
}

.bg{

  background-image: url(assets/img/bg1.jpg);
    background-repeat: no-repeat center fixed;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

  </style>


<section  id="email-marketing" class="bg" style="padding:0px;padding-top:25px">
<div class=" aos-init aos-animate" >
  <div class="row g-0 1coluna" style="padding:0px">
   
  
  <div class="col-md-8 offset-md-2" style="">


  <h2 style="color:#fff;text-align:center"> Alcance suas metas com o nosso serviço de 
  <span style="color: #ffc107;font-weight:bold">E-mail Marketing</span> </h2>
      

  <div class=" " style="">
<p style="color:#fff;font-size:15px;text-align:center">
Desfrute de ferramentas de marketing por correio eletrónico potentes e 
fáceis de utilizar, adequadas a empresas de qualquer dimensão. 
Todas as suas necessidades de marketing por correio eletrónico
 estão num único local - geração de leads, gestão de contactos, 
 conceção de correio eletrónico, criação de campanhas, relatórios e análises, e muito mais.
 
</p>
      </div>
  
  <div class="row g-0 2coluna" style="padding:25px">

  <div class=" col-md-6" style="">
  <img src="assets/img/email-m.png" class="img-fluid " style="height:300px;margin-bottom:10px"/>

      </div>


  <div class=" col-md-6" style="">
<p style="color:#fff;font-size: 14px;text-align:justify;border-radius:10px;border-right: 10px solid #e3cb00;padding:15px;background: #ffc10782;font-family: italic!important;">
Crie fantásticas campanhas de marketing por correio eletrónico do início ao fim.
 Adicione e gira os seus contactos, escolha o esquema e o assunto do e-mail e, 
 em seguida, personalize, configure e programe o envio de e-mails. 
 Utilize funcionalidades como a otimização do tempo de envio e 
 analise os resultados da sua campanha em tempo real.
 Você pode alcançar uma grande quantidade de pessoas de forma direta e imediata, com uma lista de contatos
 bem segmentada.

 <br><b><i style="color:#fff"class="fa-solid fa-backward"></i> Modelos de correio eletrónico</b>
 



</p>
      </div>
    
      
  
       <!--fimdorow--></div>

        


  <!--fimdaprimeiracoluna8--></div>




</div>
</div>
  </section>

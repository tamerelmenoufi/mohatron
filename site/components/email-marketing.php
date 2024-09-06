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


.animated-word {
    font-family: revert;
    letter-spacing: 0.4em;
    font-weight: bold;
    font-size: 16px;
    text-align: center;
    color: #144160;
    cursor: pointer;
    max-width: 600px;
    width: 100%;
    outline: 2px solid;
    outline-color: rgb(227 203 0);
    transition: all 800ms cubic-bezier(0.6, 2, 0, 0.8);
    border-radius: 25px;
    background: #e3cb00;
    padding: 10px;
}

.animated-word:hover {
    color: rgb(249 250 252);
    outline-color: rgb(230 255 15 / 0%);
    outline-offset: 500px;
    text-shadow: 0px 2px 2px #000;
}

  </style>


<section  id="email-marketing" class="bg" style="padding:0px;padding-top:25px">
    <div class=" aos-init aos-animate" style="" >
       <div class="row g-0 " style="padding:25px">
          
       <div class="col-sm-5 col-md-9" style="">

       
    <p class="lead col-md-9 offset-md-2" style="font-size:35px;color:#fff;font-weight:bold;margin-bottom:0px">
   <b style="text-align: center;font-size:30px;color:#fdb33e;">E-mail Marketing:</b><br>
  A ferramenta completa para <br> envio de e-mail
  </p>

  <div class="row g-0 " style="">

<div class="col-md-8 " style="">
    <p class="o-7 col-md-8 offset-md-3" style="margin-top:5px; font-size:19px;padding:0px;color:#fff ">
   Aumente sua base de <b style="color:#fdb33e;">clientes </b> e <b style="color:#fdb33e;"> venda </b>mais.
   </p>
   </div>

   <div class="o-3 col-md-3 offset-md-1 " style="">
   <div style="margin-bottom:15px">
      <button class="btn">
        <a titulo="E-mail Profissional"  class="teste" title="segmentos" href="#mostrar_planos">
        <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
          <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
        </svg>
        <span style="font-size:14px">Conheça nossos planos</span>
        </a>
      </button>
    </div>
    </div>

    </div>

<div class="row g-0 " style="">
      <div class=" col-md-4" style="padding:5px">
        <div style="background: #ffffff;border-radius: 10px;
        box-shadow: 2px 1px 3px #0f83d3;padding: 15px 15px;">
        <i style="font-size:20px" class="fa-solid fa-palette"></i><br><br>
         <p style="color: #0f83d3;font-size:17px;margin-bottom:2px;font-weight:bold">
         Temas prontos para usar
        </p>
        <p style="color: #615d5d;font-size:12px;margin-bottom:2px;">
        Diversos temas disponiveis para seu e-mail.
        </p>
        </div>
      </div>

      <div class=" col-md-4" style="padding:5px">
        <div style="background: #ffffff;border-radius: 10px;
        box-shadow: 2px 1px 3px #0ed9c8;padding: 15px 15px;">
        <i style="font-size:20px" class="fa-solid fa-cloud-arrow-up"></i><br><br>
         <p style="color: #615d5d;font-size:14px;margin-bottom:2px">
         Planos com até<b> 50 GB</b> de <br> armazenamento de e-mail.
        </p>
        </div>
      </div>

      <div class=" col-md-4" style="padding:5px">
        <div style="background: #ffffff;border-radius: 10px;
        box-shadow: 2px 1px 3px #0ed9c8;padding: 15px 15px;">
        <i style="font-size:20px" class="fa-solid fa-lock"></i><br><br>
         <p style="color: #615d5d;font-size:14px;margin-bottom:2px">
         E-mail totalmente <b>seguro</b> e <b>sem <br> anúncios.</b>
        </p>
        </div>
      </div>


     


</div>

    
    </div>


        <div class="col-sm-5 col-md-3">



<div style="text-align:right">
    <img src="assets/img/e-mail-1.gif" class="img-fluid  " style="border-radius:25px;height:275px">
     </div>

</div>



                </div>
            </div>   
  </section>
  
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
  </style>


<section  id="hospedagem" class="beneficios animar" style="padding:10px">

    <!-- Titulo -->
    <div class="titulo" style="text-align:center">
      <h2><span style="color: #0663b5;font-weight:bold">Hospedagem</span> veloz para colocar suas 
       <span style="color: #0663b5;font-weight:bold">ideias</span> em ação!</h2>
      <p>Este é um serviço fundamental para que o público consiga acessar as suas páginas.</p>
      <div class="linha"></div>
    </div>
    <!-- Quadros -->
    <div class="quadros ">
     
    <div class="row g-0">
      
    <div class="quadro col-md-4" >
        <div class="icone um">
        <div><i class="fa-solid fa-user-lock" style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;"></i></div>
        </div>
        <div class="texto">
          <h3>Certificado SSL</h3>
          <p>Para aumentar a segurança do seu site, todos os planos incluem certificado SSL 100% configurado dentro da sua hospedagem.</p>
        </div>
      </div>

      <div class="quadro col-md-4">
        <div class="icone um">
          <div><i class="fa-solid fa-bolt" style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;"></i></div>         
        </div>
        <div class="texto">
          <h3>LiteSpeed</h3>
          <p>A velocidade do seu site importa. Todos os planos têm incluso o LiteSpeed para otimização e velocidade do site.</p>
        </div>
      </div>

      <div class="quadro col-md-4">
        <div class="icone um">
        <i class="fa-solid fa-cloud-arrow-down"   style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;" > </i>
        </div>
        <div class="texto">
          <h3>Backup</h3>
          <p>Os seus arquivos estarão seguros na Nuvem! Todos os planos incluem backup diário para armazenar os seus sites e projetos com segurança.</p>
        </div>
      </div>

      </div>


      <div class="row g-0">

      <div class="quadro col-md-4">
        <div class="icone um">
        <i class="fa-solid fa-chart-line"   style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;" > </i>
        </div>
        <div class="texto">
          <h3>Escala</h3>
          <p>Todos os nossos servidores possuem escala para sua necessidade. Basta solicitar para o time de suporte que aumentamos o espaço.</p>
        </div>
      </div>


      <div class="quadro col-md-4">
        <div class="icone um">
          <i class="fa-solid fa-bars-progress"  style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;"></i>
        </div>
        <div class="texto">
          <h3>Container Docker</h3>
          <p>Nossa plataforma oferece ambientes isolados e portáteis para suas aplicações, garantindo alta performance.</p>
        </div>
      </div>


      <div class="quadro col-md-4">
        <div class="icone um">
        <i class="fa-solid fa-spinner" style="font-size:22px;color:#fff;border: solid 3px #fff;border-radius:25px;padding:8px;background: #0d77ad;"></i>
        </div>
        <div class="texto">
          <h3>Otimização</h3>
          <p>Todos os servidores são otimizados! Ajudamos você a otimizar o seu site para manter a velocidade dele ainda mais rápida.</p>
        </div>
      </div>
      </div>
    


    </div>

    <div class="wrap2" style="margin-top:25px;margin-bottom:25px">
  <button class="botao-sms2">Contrate agora</button>
</div>
  </section>

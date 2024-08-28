  <!-- ======= Recent Blog Posts Section ======= -->

    <style>

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
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
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
}

  </style>


<section class="beneficios animar">
    <!-- Titulo -->
    <div class="titulo">
      <h2>Todos os <span>planos</span> incluem <span>benefícios</span></h2>
      <p>Todos os planos têm funcionalidades e bônus que vão ajudar na construção do seu site com a mais alta performance</p>
      <div class="linha"></div>
    </div>
    <!-- Quadros -->
    <div class="quadros">
      <div class="quadro">
        <div class="icone um">
        <i class="fa-solid fa-user-lock"></i>
        </div>
        <div class="texto">
          <h3>Certificado SSL</h3>
          <p>Para aumentar a segurança do seu site, todos os planos incluem certificado SSL 100% configurado dentro da sua hospedagem</p>
        </div>
      </div>
      <div class="quadro">
        <div class="icone dois">
          <img src="./assets/files/images/icone-litespeed-azul.svg">
        </div>
        <div class="texto">
          <h3>LiteSpeed</h3>
          <p>A velocidade do seu site importa. Todos os planos têm incluso o LiteSpeed para otimização e velocidade do site.</p>
        </div>
      </div>
      <div class="quadro">
        <div class="icone tres">
          <img src="./assets/files/images/icone-backup-verde.svg">
        </div>
        <div class="texto">
          <h3>Backup</h3>
          <p>Os seus arquivos estarão seguros na Nuvem! Todos os planos incluem backup diário para armazenar os seus sites e projetos com segurança.</p>
        </div>
      </div>
      <div class="quadro">
        <div class="icone quatro">
          <img src="./assets/files/images/icone-escala.svg">
        </div>
        <div class="texto">
          <h3>Escala</h3>
          <p>Todos os nossos servidores possuem escala para sua necessidade. Basta solicitar para o time de suporte que aumentamos o espaço</p>
        </div>
      </div>
      <div class="quadro">
        <div class="icone cinco">
          <img src="./assets/files/images/icone-elementor-roxo.svg">
        </div>
        <div class="texto">
          <h3>Plugins WordPress</h3>
          <p>Os planos incluem plugins originais. Elementor PRO e WP Rocket estão disponíveis aqui na Nuvem.</p>
        </div>
      </div>
      <div class="quadro">
        <div class="icone seis">
          <img src="./assets/files/images/icone-otimizacao.svg">
        </div>
        <div class="texto">
          <h3>Otimização</h3>
          <p>Todos os servidores são otimizados! Ajudamos você a otimizar o seu site para manter a velocidade dele ainda mais rápida.</p>
        </div>
      </div>
    </div>
  </section>

<style>

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

<section  id="sms" class="" style="padding:0px">
  <div class="row g-0">

    <div class="col-md-6">

          <div>
             <img src="assets/img/img-sms.png" class="img-fluid " style="">
         </div>
    </div>
<!-- fim imagem sms --->



    
    <div class="col-md-6" style="padding:15px">

       
    <p style="font-size:30px;color:#005992;font-weight:bold">
      Crie experiências de SMS que permitam que você alcance os usuários finais como e quando quiser
    </p>


      <div class="row g-0">
       
        <div class="col-md-6">
    <p style="font-size:13px;border-left: 3px solid #005992;padding:5px ">
    <b style="font-size:18px;color: #005992;">Venda</b><br>
    Divulgue promoções, cupons de desconto, lançamentos, datas comemorativas e ofertas especiais.     
    </p>
    
    <p style="font-size:13px;border-left: 3px solid #005992;padding:5px ">
    <b style="font-size:18px;color: #005992;">Cobrança</b><br>
    Envie boletos e lembretes de vencimentos para reduzir a inadimplência.
    </p>
      </div>

       <div class="col-md-6">

    <p style="font-size:13px;border-left: 3px solid #005992;padding:5px ">
    <b style="font-size:18px;color: #005992;">Comunicação</b><br>
    Envie agendamentos, lembretes, boas-vindas, comunicação interna ou pesquisa de satisfação.
    </p>
      </div>
          
      <div class="wrap">
        <a class="teste" titulo="sms" title="segmentos" href="#mostrar_planos">
  <button class="botao-sms">  
    Saiba mais
  </button>
</a>
</div>


    </div>
  
  
  
    </div>
  </div><!--fim de tudo--->
          </section >

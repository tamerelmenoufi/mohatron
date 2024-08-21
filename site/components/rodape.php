
  <style>

/* .footer .footer-legal {
  padding: 30px 0;
  background: #057a34!important;
} */

.footer .footer-legal .social-links a:hover {

    text-decoration: none;
}

.footer .footer-legal {
    padding: 15px 0;
background:none;
}
  </style>

  <!-- ======= Footer ======= -->
  

<footer id="footer" class="footer" style="background:#0f77ac">


<div style="text-align:center;font-size:14px;padding-bottom:2px;margin-top:40px"><div class="row g-0"><div class="col-md-6 text-center text-md-end">
  &copy; Copyright <strong><span>Mohatron Soluções em TI</span></strong>.
</div><div class="col-md-6 text-center text-md-start">
  <a class="janela" janela="components/popup.php" style="color:#fff; text-decoration:underline; cursor:pointer" >Todos os direitos reservados </a>
</div></div> 
</div>


</footer>


<script>
    $(function(){
        
        $(".janela").click(function(){
            url = $(this).attr("janela");
            console.log(url);
            $.dialog({
                title:false,
                content:"url:"+url,
                columnClass:"col-md-6"
            })
        });        
    });
    
</script>




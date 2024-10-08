<?php
  function MontaMenu($v){
    global $con;
    global $_SESSION;
    $query = "select a.*, (select count(*) from menus where vinculo = a.codigo) as qt from menus a where a.vinculo = '{$v}' and a.situacao = '1' order by a.ordem asc";
    $result = sisLog( $query);
    if(mysqli_num_rows($result)){
?>
      <ul>
<?php
    while($d = mysqli_fetch_object($result)){
?>
        <li <?=(($d->qt)?'class="dropdown"':false)?>>
            <a href="<?=$d->url?>" <?=((!$d->qt and !$v)?'class="nav-link scrollto"':false)?>><?=(($d->qt)?'<span>'.$d->titulo.'</span> <i class="bi bi-chevron-down dropdown-indicator"></i>':$d->titulo)?></a>
            <?php
            MontaMenu($d->codigo);
            ?>
        </li>
<?php
    }
?>
      </ul>
<?php
    }
  }

?>

<style>
.header .logo h1 span {
  color: #144397!important;
  font-weight: 500;
}


.header {
    padding: 10px 0;
    transition: all 0.5s;
    z-index: 997;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
    color: #144397;
}
.navbar > ul > li > a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #144397;
    visibility: hidden;
    transition: all 0.3s ease-in-out 0s;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out 0s;
    
}


.navbar a, .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 20px;
    font-family: var(--font-secondary);
    font-size: 16px;
    font-weight: bold;
    color: rgb(19 63 142);
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
    }


    @media (max-width: 1279px) {
    .navbar ul {
        position: absolute;
        inset: 0;
        padding: 10px 0;
        margin: 0;
        background: rgb(255 255 255 / 90%);
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
    }
}

@media (max-width: 1279px) {
    .mobile-nav-active .navbar:before {
        content: "";
        position: fixed;
        inset: 0;
        background: rgb(94 128 189);
        z-index: 9996;
    }
}
</style>


  <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class=" d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo-site-mohatron-1.png" style="height:90px !important;" alt="">
       
      </a>



      <nav id="navbar" class="navbar">
      <?php
      /*
      ?>
      <!-- <ul>

          <li class="dropdown">
            <a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.html" class="active">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
          <li acao="adm/menu/index.php" target="popup"><i class="bi bi-gear" style="font-size:25px; color:red"></i></li>

        </ul>

        <i class="bi bi-list mobile-nav-toggle d-none"></i>
       -->
      <!-- .navbar -->
      <?php
      //*/
      MontaMenu(0);
      ?>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>
      <!-- <a class="btn-getstarted scrollto" href="index.php#about"><i class="fa-regular fa-hand-pointer"></i> Iniciar</a> -->

    </div>
  </header><!-- End Header -->
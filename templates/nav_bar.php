<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+57 311 2311487 | +57 311 2311494</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>info@frine.org</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="https://twitter.com/fundacionfrine" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/Fundaci%C3%B3n-FRINE-119085368202919/" target="_blank"><i class="fab fa-facebook-f"></i></a>            
                            <a href="https://www.instagram.com/fundacionfrine/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
        <a href="" class="navbar-brand"><img src="static/img/logo_frine.jpg" alt="Image"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">

                    <?php if($page == 'home') { ?>  <a href="./index.php" class="nav-item nav-link active">Inicio</a>   
                    <?php  } else { ?> <a href="./index.php" class="nav-item nav-link">Inicio</a> <?php } ?>

                    <?php if($page == 'about') { ?>  <a href="./about.php" class="nav-item nav-link active">Quiénes somos</a>   
                    <?php  } else { ?> <a href="./about.php" class="nav-item nav-link">Quiénes somos</a> <?php } ?>

                    

                    
                    <!-- <a href="causes.html" class="nav-item nav-link">Que hacemos</a> -->
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Nuestros programas</a> -->
                        <?php if($page == 'programs') { ?>  <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" aria-expanded="false">Nuestros programas</a>   
                        <?php  } else { ?> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Nuestros programas</a>  <?php } ?>
                        <div class="dropdown-menu">
                            <a href="programs.php" class="dropdown-item" id="dropdown-item">Programas internos</a>
                            <a href="enterprise-programs.php" class="dropdown-item" id="dropdown-item">Para empresas o externos</a>
                        </div>
                    </div>
                    <a href="https://medium.com/@fundacionfrine" class="nav-item nav-link" target="_blank">Blog</a>
                    
                    <?php if($page == 'contact') { ?>  <a href="./contact.php" class="nav-item nav-link active">Contacto</a>   
                    <?php  } else { ?> <a href="./contact.php" class="nav-item nav-link">Contacto</a> <?php } ?>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" id="donate-unique" href="donate.php">Donar</a>
                    </div>
                    <!-- <a href="donate.html" class="nav-item nav-link">Donar</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Gameorg</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--

    TemplateMo 579 Cyborg Gaming

    https://templatemo.com/tm-579-cyborg-gaming

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?=base_url()?>" class="logo">
                        <img src="<?=base_url()?>assets/images/Gameorg.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?=base_url()?>" class="active">Ana Sayfa</a></li>
                        <li><a href="<?=base_url("panel")?>">Panel</a></li>

                        <?php
                        if (isset($durum) && $durum)

                        {
                        ?>
                            <li><a href="<?=base_url('logout')?>">Çıkış <img src="<?=base_url()?>assets/images/profile-header.jpg" alt=""></a></li>
                        <?php
                        }
                        else
                        {
                       ?>
                        <li><a href="<?=base_url('login')?>">Giriş <img src="<?=base_url()?>assets/images/profile-header.jpg" alt=""></a></li>
                        <?php
                        }
                        ?>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
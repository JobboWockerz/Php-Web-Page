<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="main-banner">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="header-text">
                                <h6>Gameorg' a Hoş Geldin</h6>
                                <h4>İlgini Çeken Oyun İle İlgili Detaya Burdan Ulaşabilirsin</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Banner End ***** -->

                                <div class="game-details">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2><?=esc($veri['baslik'])?></h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                    </div>

                                                    <p>
                                                        <img class="col-4" src="<?=base_url('uploads/'.esc($veri['resim']))?>" alt="" style="border-radius: 23px; margin-bottom: 10px;">
                                                    <div class="text-white mt-5">
                                                        <?=esc($veri['icerik']);
                                                        ?>
                                                    </div>
                                                    </p>
                                                    <br>
                                                    <?php
                                                    echo anchor('https://store.steampowered.com/charts/topselling/TR', "Steam' de İncele", 'target="_blank"');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
</div>
</div>
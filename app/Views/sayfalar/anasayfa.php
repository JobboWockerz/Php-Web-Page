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
                                <h4><em>Popüler</em> Oyunlar İncele</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Banner End ***** -->

                <div class="game-details">
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <h2>Popüler Oyunlar</h2>
                        </div>
                        <?php
                        if (isset($kayitlar) && count($kayitlar)>0)
                        {
                            foreach ($kayitlar as $item){

                                echo '<div class="col-lg-12 mt-5">';
                                echo '<div class="content">';
                                echo '<div class="row">';
                                echo '<div class="col-lg-6 mb-5">';
                                echo '<h3>'.$item['baslik'].'</h3>';
                                echo '</div>';
                                echo '<div class="col-lg-6">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="col-lg-4">';
                                echo '<img src="'.base_url("uploads/").$item['resim'].'" alt="" style="border-radius: 23px; margin-bottom: 30px;">';
                                echo '</div>';
                                echo '<div class="col-lg-12">';
                                echo '<p>'.word_limiter($item['icerik'], 50).'</p>';
                                echo '</div>';
                                echo '<div class="col-lg-12">';
                                echo '<div class="main-border-button">';
                                echo '<a href="'.base_url('incele/'.$item['url']).'">Hemen İncele!</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>


                        <?php
                        }
                        else
                        {
                            ?>

                            <?php
                        }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
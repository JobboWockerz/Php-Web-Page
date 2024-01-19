<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="mb-5 text-primary"><i>Giriş</i></h1>
                        <?= validation_list_errors() ?>
                        <?php
                        if(isset($uyari)){
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $uyari;
                            echo '</div>';
                        }
                        ?>
                        <form action="<?=base_url('login')?>" method="post">
                            <?=csrf_field()?>
                        <div class="main-profile ">
                            <div class="row">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="kullanici_ad" name="kullanici_ad">
                                    <label for="kullanici_ad">Kullanıcı Adı</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="sifre" name="sifre">
                                    <label for="sifre">Şifre</label>
                                </div>
                                <input type="submit" name="gonder" class="btn btn-primary" value="Giriş Yap">
                        </form>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-7">
                <h1 class="mb-5 text-danger"><i>Üye Ol</i></h1>
                <div class="main-profile">
                    <form method="post" action="<?= base_url('kayit_ol') ?>">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kuladuye" name="kullanici_ad">
                                <label for="kuladuye">Kullanıcı Adı</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="sifreuye" name="sifre">
                                <label for="sifreuye">Şifre</label>
                            </div>
                            <input type="submit" name="gonderuye" class="btn btn-danger" value="Üye Ol">
                        </div>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

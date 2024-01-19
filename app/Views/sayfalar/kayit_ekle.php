<div class="container mt-5">
    <h2 class=" text-primary"><i>Kayıt Ekle</i></h2>
    <?= validation_list_errors() ?>
    <form action="<?=base_url('kayit_ekle')?>" method="post" enctype="multipart/form-data">
        <?=csrf_field()?>
        <div class="main-profile ">
            <div class="row">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="baslik" name="baslik">
                    <label for="baslik">Başlık</label>
                </div>
                <div class="form-floating mb-3">
                    <label for="icerik"></label>
                    <textarea type="text" cols="10" class="form-control" name="icerik"></textarea>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="resim" name="resim">
                </div>
                <input type="submit" name="gonder" class="btn btn-primary" value="Kaydet">
    </form>
</div>
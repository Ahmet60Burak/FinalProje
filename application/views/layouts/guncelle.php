
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AHMET HOLDİNG-DASHBOARD</title>
    <?php $this->load->view("layouts/head"); ?>
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">

    <?php $this->load->view("layouts/leftmenu"); ?>

    <div class="content">
        <?php $this->load->view("layouts/topmenu"); ?>
        <?php foreach ($veri as $items){ ?>
        <form method="post" action="<?= base_url()?>admin/guncelle2/<?=$items->id?>" >
            <div class="col-sm-12 col-xl-11">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Güncelle</h6>
                    <label for="ad">Ad</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $items->Ad?>">
                    </div>
                    <label for="soyad">Soyad</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="soyad" name="soyad" value="<?php echo $items->Soyad?>">
                    </div>
                    <label for="mail">E-Mail</label>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="mail" name="mail"value="<?php echo $items->Mail?>">
                    </div>
                    <label for="sifre">Şifre</label>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="sifre" name="sifre">
                    </div>
                    <label for="d-tarih">Doğum Tarihi</label>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="d-tarih" name="d-tarih"value="<?php echo $items->d_tarih?>">
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="cinsiyet" name="cinsiyet"value="<?php echo $items->Cinsiyet?>"
                                aria-label="Floating label select example">
                            <option selected>Cinsiyet Seçin</option>
                            <option value="0">Kadın</option>
                            <option value="1">Erkek</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <button type="submit" class="btn btn-primary" style="margin-left: 850px">Güncelle</button>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
        <?php $this->load->view("layouts/footer"); ?>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<?php $this->load->view("library/script"); ?>
</body>

</html>
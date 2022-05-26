
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
<form method="post" action="<?php echo  base_url("admin/insert/")?>">
        <div class="col-sm-12 col-xl-11">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Kayıt</h6>
                <label for="ad">Ad</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ad" name="ad">
                    <?php echo form_error('ad')?>
                </div>
                <label for="soyad">Soyad</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="soyad" name="soyad">
                    <?php echo form_error('soyad')?>
                </div>
                <label for="k_adi">Kullanıcı Adı</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="k_adi" name="k_adi">
                    <?php echo form_error('k_adi')?>
                </div>
                <label for="mail">E-Mail</label>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="mail" name="mail">
                    <?php echo form_error('mail')?>
                </div>
                <label for="sifre">Şifre</label>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="sifre" name="sifre">
                    <?php echo form_error('sifre')?>
                </div>
                <label for="sifre2">Şifre Tekrar</label>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="sifre2" name="sifre2">
                    <?php echo form_error('sifre2')?>
                </div>
                <label for="d-tarih">Doğum Tarihi</label>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="d-tarih" name="d-tarih">
                    <?php echo form_error('d-tarih')?>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="cinsiyet" name="cinsiyet"
                            aria-label="Floating label select example">
                        <option selected>Cinsiyet Seçin</option>
                        <option value="0">Kadın</option>
                        <option value="1">Erkek</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <button type="submit" class="btn btn-primary" style="margin-left: 850px">Kayıt Ol</button>
                </div>
            </div>
        </div>
</form>

        <?php $this->load->view("layouts/footer"); ?>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<?php $this->load->view("library/script"); ?>
</body>

</html>
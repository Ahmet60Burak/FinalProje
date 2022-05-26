

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kullanıcı Listele </title>
    <?php $this->load->view("layouts/head"); ?>
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">

    <?php $this->load->view("layouts/leftmenu"); ?>

    <div class="content">
        <?php $this->load->view("layouts/topmenu"); ?>

        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Kullanıcılar</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                        <tr class="text-dark">

                            <th scope="col">Ad</th>
                            <th scope="col">Soyad</th>
                            <th scope="col">Kullanıcı adı</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Doğum Tarihi</th>
                            <th scope="col">Cinsiyet</th>
                            <th scope="col">Güncelle</th>
                            <th scope="col">Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($item as $items) { ?>
                        <tr>
                                <td><?php echo $items->Ad?></td>
                                <td><?php echo $items->Soyad?></td>
                                <td><?php echo $items->k_adi?></td>
                                <td><a href="mailto:"><?php echo $items->Mail?></a></td>
                                <td><?php echo $items->d_tarih?></td>
                                <td><?php echo $items->Cinsiyet?></td>
                                <td><a class="btn btn-sm btn-primary" href="<?php echo base_url("admin/guncelle/$items->id")?>"> Güncelle</a></td>
                                <td><a class="btn btn-sm btn-primary" href=""> Sil</a></td>
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php $this->load->view("layouts/footer"); ?>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<?php $this->load->view("library/script"); ?>
</body>

</html>
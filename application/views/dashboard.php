
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

        <?php $this->load->view("layouts/main"); ?>


        <?php $this->load->view("layouts/footer"); ?>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<?php $this->load->view("library/script"); ?>
</body>

</html>
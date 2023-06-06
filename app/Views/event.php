<?= $this->include('partial/header2') ?>
<div class="container mt-3">
    <center>
        <h1 class="mb-4 fw-bold"><strong>MY EVENT</strong></h1>
    </center>
    <div class="d-flex justify-content-around flex-wrap card-group mt-4">
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <a href="your_url_here" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
                <div class="card">
                    <img src="<?= base_url('assets/image/tour-img.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>20 Agustus 2023</p>
                        <h5 class="card-title"><strong>Badminton Tournament For Poharin Tidar (Fun Game)</strong></h5>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <center>
        <a href="form">
            <button type="button" class="btn btn-primary mt-4" style="font-size: 20px !important; width: 500px !important;">Create New Competition</button>
        </a>
    </center>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>
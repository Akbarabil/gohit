<?= $this->include('partial/header2') ?>
<div>
    <div class="banner text-center">
        <img src="<?= base_url('assets/image/bgfull.png') ?>" alt="" srcset="" class="img-fluid" style="width: 400%; height: 400%;">
    </div>
    <?= $this->include('partial/latest') ?>
    <div class="container mt-5">
        <h1 class="mb-4 fw-bold"><strong>Choose Your Sport</strong></h1>
        <div class="d-flex justify-content-around flex-wrap">
            <a href="/list/Badminton" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/badminton-logo.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>Badminton</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/football.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>FOOTBALL</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/pimpong.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>PING - PONG</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/running.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>RUNNING</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
            <a href="/list/Esport" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                <img src="<?= base_url('assets/image/esport.png') ?>" alt="" class="me-3">
                <div>
                    <h2><strong>E-SPORT</strong></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container mt-3">
    <center>
        <h1 class="mb-4 fw-bold"><strong>Hot Event</strong></h1>
    </center>
    <div class="d-flex justify-content-around flex-wrap card-group mt-4">
        <?php if (!empty($compe)) {
            foreach ($compe as $isi) {
        ?>
                <a href="/dtt/<?php if (isset($isi['id_event'])) echo $isi['id_event'] ?>" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="<?= base_url('assets/image/' . $isi['upload']) ?>" style="height: 350px; width: 400px; " class="card-img-top" alt="...">
                        <div class="card-body">
                            <p><?php echo $isi['date_column'] ?></p>
                            <h5 class="card-title"><strong><?php echo $isi['title'] ?></strong></h5>
                        </div>
                    </div>
                </a>
            <?php } ?>
        <?php } else { ?>
            <h1>Oops tidak ada kompetisi</h1>
        <?php } ?>
    </div>
    <div class="">
        <center>
            <a href="hots">
                <button type="button" class="btn btn-primary mt-4 " style="font-size: 20px !important; width: 500px !important;">See All Hot Event</button>
            </a>
        </center>
    </div>
</div>
<div class="motivasi text-center mt-5">
    <img src="<?= base_url('assets/image/motivate-home.png') ?>" alt="" srcset="" style="width: 80%;">
</div>
</div>
<?= $this->include('partial/footer') ?>
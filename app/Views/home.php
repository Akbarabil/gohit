<?= $this->include('partial/header2') ?>
<div>
    <div class="banner text-center">
        <img src="<?= base_url('assets/image/bgfull.png') ?>" alt="" srcset="" class="img-fluid" style="width: 400%; height: 400%;">
    </div>

    <?= $this->include('partial/latest') ?>

    <div class="container mt-5">
        <h1 class="mb-4 fw-bold"><strong>Choose Your Sport</strong></h1>
        <div class="d-flex justify-content-around flex-wrap">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <a href="list" class="mx-4 my-3 p-2 d-flex align-items-center " style="flex-basis: 25%; text-decoration: none; color: inherit;">
                    <img src="<?= base_url('assets/image/badminton-logo.png') ?>" alt="" class="me-3">
                    <div>
                        <h2><strong>Badminton</strong></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere.</p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="text-center">
    <h1 class=" mt-4 mb-4"><strong>Hot Event</strong></h1>
    <div class="card-group">
        <div class="card mx-2">
            <img src="<?= base_url('assets/image/img-news.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>U-20 World Cup Indonesia 2023</strong></h5>
            </div>
        </div>
        <div class="card mx-2">
            <img src="<?= base_url('assets/image/img-news.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>U-20 World Cup Indonesia 2023</strong></h5>
            </div>
        </div>
        <div class="card mx-2">
            <img src="<?= base_url('assets/image/img-news.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>U-20 World Cup Indonesia 2023</strong></h5>
            </div>
        </div>
    </div>
    <div class="">
        <button type="button" class="btn btn-primary mt-4 " style="font-size: 20px !important; width: 500px !important;">See All Hot Event</button>
    </div>
</div>

<div class="motivasi text-center mt-5">
    <img src="<?= base_url('assets/image/motivate-home.png') ?>" alt="" srcset="" style="width: 80%;">
</div>
</div>
<?= $this->include('partial/footer') ?>
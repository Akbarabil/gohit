<?= $this->include('partial/header2') ?>
<div class="container mt-3">
    <center>
        <h1 class="mb-4 fw-bold"><strong>MY EVENT</strong></h1>
    </center>
    <div class="d-flex justify-content-around flex-wrap card-group mt-4">
        <a href="dt" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
            <div class="card">
                <img src="<?= base_url('assets/image/' . $isi['upload']) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p><?php echo $isi['date_column'] ?></p>
                    <h5 class="card-title"><strong><?php echo $isi['title'] ?></strong></h5>
                </div>
            </div>
        </a>
        <a href="dt" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
            <div class="card">
                <img src="<?= base_url('assets/image/' . $isi2['upload']) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p><?php echo $isi2['date_column'] ?></p>
                    <h5 class="card-title"><strong><?php echo $isi2['title'] ?></strong></h5>
                    <input type="hidden" name="hh" value="<?php echo $isi2['id_event'] ?>" class="formbold-form-input" />
                </div>
            </div>
        </a>
        <a href="dt" class="mx-1 my-3 p-2 d-flex align-items-center " style="flex-basis: 30%; text-decoration: none; color: inherit;">
            <div class="card">
                <img src="<?= base_url('assets/image/' . $isi3['upload']) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p><?php echo $isi3['date_column'] ?></p>
                    <h5 class="card-title"><strong><?php echo $isi3['title'] ?></strong></h5>
                    <input type="hidden" name="hh" value="<?php echo $isi3['id_event'] ?>" class="formbold-form-input" />
                </div>
            </div>
        </a>
    </div>
    <input type="hidden" name="l" value="<?php echo $id ?>" class="formbold-form-input" />
    <center>
        <a href="form">
            <button type="button" class="btn btn-primary mt-4" style="font-size: 20px !important; width: 500px !important;">Create New Competition</button>
        </a>
    </center>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>
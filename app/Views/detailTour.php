<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css.map') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<?= $this->include('partial/header') ?>
<div>
    <center>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="margin-top: 25px; background-color: azure;">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                            Badminton Tournament For poharin
                        </span>
                        <p>date :</p>
                        <p>time :</p>
                        <p>organzer :</p>
                        <p>location :</p>
                        <p>participant :</p>
                        <p>contact :</p>
                    </form>
                </div>
                <div class="card mx-2">
                    <img src="<?= base_url('assets/image/img-news.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong>U-20 World Cup Indonesia 2023</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
<?= $this->include('partial/latest') ?>
<?= $this->include('partial/footer') ?>
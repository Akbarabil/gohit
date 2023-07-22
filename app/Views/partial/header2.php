<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap v5 Themekit</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Website Menu #8</title>

</head>

<body>
    <header class="mx-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <a href="home"><img src="<?= base_url('assets/image/logo.png') ?>" alt="" srcset="" class="d-flex align-items-center">
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">Calendar</a></li>
            <li><a href="/event" class="mx-5 nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">My Competition</a></li>
            <li><a href="/late" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">News</a></li>
        </ul>
        <div class="text-end">
            <?php
            if (isset($nama)) {
                echo '<li class="mx-5 nav-link px-2 link-dark fw-bold" style="font-size: 24px !important; ">';
                echo '<a href="/logout">';
                echo '<p style="margin-bottom: 0px; color: #dc3545;">Hi  ' . $nama . '</p>';
                // echo "<img src=" . base_url("img/expert/mentor0.png") . ">";
                echo '</a>';
                echo '</li>';
            } else {
                echo '<a href="login"><button type="button" class="btn btn-primary fw-bold">SIGN IN</button></a>';
            }
            ?>
        </div>
    </header>